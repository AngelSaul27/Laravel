<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            font-family: 'Open Sans', sans-serif;
            font-size: 12px;
            color: #000;
            line-height: 1.5;
            margin-top: 0;
            margin-bottom: 0;
        }
        main{
            width: 21cm;
            height: 29.7cm;
            margin: 0 auto;
            /*background-color: rgba(241, 241, 241, 0.555);*/
        }
    </style>
    <title>Plantilla 02 - Invoice</title>
</head>
<body>
    <main>
        <div style="background-color: #ffffff; padding: 10px; display: flex; align-items: center; justify-content: space-between;">
            <h1 style="color:rgb(55, 55, 55); font-size:40px; font-weight:bold; margin: 0px 0px 0px 10px;">
                <span><span style="color: #4c9a92;">PDF</span> Invoice</span>
            </h1>
            <img style="margin: 2px; filter: drop-shadow(0px 0px 10px #93ccc6)"  src="./asset/logo.png" alt="books" width="auto" height="80px" >
        </div>
        <!-- end header -->
        <div style="display: flex; justify-content: space-between; margin: 10px 0px 10px 0px; ">
            <div style="background-color: #e0eff1; width: 100%; padding: 10px 10px 10px 10px; letter-spacing: 0.5px; color: #3b4344; border-right: 1px solid; display: flex; justify-content: space-between;">
                <span>Invoice No.</span>
                <span>---</span>
            </div>
            <div style="background-color: #e0eff1; width: 100%; padding: 10px 10px 10px 10px; letter-spacing: 0.5px; color: #3b4344; border-right: 1px solid; display: flex; justify-content: space-between;">
                <span>Invoice Date:</span>
                <span>---</span>
            </div>
            <div style="background-color: #e0eff1; width: 100%; padding: 10px 10px 10px 10px; letter-spacing: 0.5px; color: #3b4344; display: flex; justify-content: space-between;">
                <span>Due Date:</span>
                <span>---</span>
            </div>
        </div>
        <!-- end pre-data -->
        <div style="display: flex; padding-top: 15px; margin: 0px !important;">
            <div style="display: block; width: 100%; border-left: 3px solid #5a6d78; padding-left: 5px; color: #65727a;">
                <h2 style="margin: 3px 3px 6px 3px; color: #292c37;">COMPANY NAME</h2>
                <p style="margin: 3px;">Address line 1</p>
                <p style="margin: 3px;">Address line 2</p>
                <p style="margin: 3px;">Phone</p>
                <p style="margin: 3px">Email</p>
            </div>
            <div style="display: block; width: 100%; border-left: 3px solid #5a6d78; padding-left: 5px; color: #65727a;">
                <h2 style="margin: 6px 3px 6px 3px; color: #292c37;">BILL TO</h2>
                <p style="margin: 3px;">Customer Name</p>
                <p style="margin: 3px;">Address line 2</p>
                <p style="margin: 3px;">Phone</p>
                <p style="margin: 3px;">Email</p>
            </div>
        </div>
        <!-- table -->
        <div style="width: 100%; margin-top: 15px;">
            <table style="width: 100%;">
                <thead>
                    <tr>
                        <th style="width: 55%; background-color: #e0eff1; padding: 10px 10px 10px 10px; font-weight: 600; color: #3b4344; text-align: left;">Description</th>
                        <th style="width: 15%; background-color: #e0eff1; padding: 10px 10px 10px 10px; font-weight: 600; color: #3b4344; text-align: center;">Quantity</th>
                        <th style="width: 15%; background-color: #e0eff1; padding: 10px 10px 10px 10px; font-weight: 600; color: #3b4344; text-align: center;">Unit Price</th>
                        <th style="width: 15%; background-color: #e0eff1; padding: 10px 10px 10px 10px; font-weight: 600; color: #3b4344; text-align: center;">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="width: 55%;  background-color: #f1f5f9; padding: 10px 10px 10px 10px; letter-spacing: 0.5px; color: #3b4344; text-align: left; word-break: break-all;"> asdasd</td>
                        <td style="width: 15%;  background-color: #f1f5f9; padding: 10px 10px 10px 10px; letter-spacing: 0.5px; color: #3b4344; text-align: center;"> asd </td>
                        <td style="width: 15%;  background-color: #f1f5f9; padding: 10px 10px 10px 10px; letter-spacing: 0.5px; color: #3b4344; text-align: center;"> asd </td>
                        <td style="width: 15%;  background-color: #f1f5f9; padding: 10px 10px 10px 10px; letter-spacing: 0.5px; color: #3b4344; text-align: center;"> asd </td>
                    </tr>
                    <tr>
                        <td style="width: 55%;  background-color: #f1f5f9; padding: 10px 10px 10px 10px; letter-spacing: 0.5px; color: #3b4344; text-align: left; word-break: break-all;"> asdasdasd</td>
                        <td style="width: 15%;  background-color: #f1f5f9; padding: 10px 10px 10px 10px; letter-spacing: 0.5px; color: #3b4344; text-align: center;"> asdasd </td>
                        <td style="width: 15%;  background-color: #f1f5f9; padding: 10px 10px 10px 10px; letter-spacing: 0.5px; color: #3b4344; text-align: center;"> asdasd </td>
                        <td style="width: 15%;  background-color: #f1f5f9; padding: 10px 10px 10px 10px; letter-spacing: 0.5px; color: #3b4344; text-align: center;"> asdasd </td>
                    </tr>
                    <tr>
                        <td style="width: 55%;  background-color: #f1f5f9; padding: 10px 10px 10px 10px; letter-spacing: 0.5px; color: #3b4344; text-align: left; word-break: break-all;"> asdasdasdasd</td>
                        <td style="width: 15%;  background-color: #f1f5f9; padding: 10px 10px 10px 10px; letter-spacing: 0.5px; color: #3b4344; text-align: center;"> asdasdasd </td>
                        <td style="width: 15%;  background-color: #f1f5f9; padding: 10px 10px 10px 10px; letter-spacing: 0.5px; color: #3b4344; text-align: center;"> asdasdasd </td>
                        <td style="width: 15%;  background-color: #f1f5f9; padding: 10px 10px 10px 10px; letter-spacing: 0.5px; color: #3b4344; text-align: center;"> asdasdasd </td>
                    </tr>
                </tbody>
            </table>
        </div>
         <!-- total data -->
         <div style="display: flex; justify-content: space-between; margin-top: 20px;">
            <div style="width: 100%; margin:0px"></div>
            <div style="width: 100%; margin:0px; display: flex; justify-content: end;">
                <div style="width: 200px; border: 2px solid #e0eff1; color: #4e4e4e;">
                    <div style="display: flex; justify-content: space-between; padding: 8px 5px 8px 5px;">
                        <p style="margin: 0px;">Subtotal</p>
                        <p style="margin: 0px;">0.00</p>
                    </div>
                    <div style="display: flex; justify-content: space-between; padding: 8px 5px 8px 5px;">
                        <p style="margin: 0px;">Tax</p>
                        <p style="margin: 0px;">0.00</p>
                    </div>
                    <div style="display: flex; justify-content: space-between; background-color: #e0eff1; padding: 3px 5px 3px 5px;">
                        <p style="font-weight: 600; font-size: 15px; margin: 0px; color: #4e4e4e;">Total ($)</p>
                        <p style="font-weight: 600; font-size: 15px; margin: 0px; color: #4e4e4e;">0.00</p>
                    </div>
                </div>
            </div>
         </div>

    </main>
</body>
</html>
