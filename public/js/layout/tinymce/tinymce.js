var editor_config = {
  path_absolute: "/",
  selector: "textarea",
  plugins: 'image code autolink lists media table',
    toolbar: 'undo redo code image editimage table',
  skin: 'oxide-dark',
  relative_urls: false,
  image_title: true,
  images_upload_url: '/admin/tiny/image/upload',
  images_upload_base_path: '/admin/tiny/image/upload',
  file_picker_types: 'image',
  images_upload_handler: (blobInfo, progress) => new Promise((resolve, reject) => {
    const xhr = new XMLHttpRequest();
    xhr.withCredentials = false;
    var token = $('input[name="_token"]').val();
    xhr.open('POST', '/admin/tiny/image/upload');
    xhr.setRequestHeader('X-CSRF-TOKEN', token);
  
    xhr.upload.onprogress = (e) => {
      progress(e.loaded / e.total * 100);
    };
  
    xhr.onload = () => {
      if (xhr.status === 403) {
        reject({ message: 'HTTP Error: ' + xhr.status, remove: true });
        return;
      }
  
      if (xhr.status < 200 || xhr.status >= 300) {
        reject('HTTP Error: ' + xhr.status);
        return;
      }
  
      const json = JSON.parse(xhr.responseText);
  
      if (!json || typeof json.location != 'string') {
        reject('Invalid JSON: ' + json);
        return;
      }
  
      resolve(json.location);
    };
  
    xhr.onerror = () => {
      reject('Image upload failed due to a XHR Transport error. Code: ' + xhr.status);
    };
  
    const formData = new FormData();
    formData.append('file', blobInfo.blob(), blobInfo.filename());
  
    xhr.send(formData);
  }),    
};

tinymce.init(editor_config);