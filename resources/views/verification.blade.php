
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('public/adminAssets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('public/adminAssets/Fonts/font.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="{{ asset('public/adminAssets/css/style.css')}}">
    <title>Verification</title>
</head>
<body>
   
    <div class="login-to-access">
        <form action="#">
         <div class="login-form">
            <figure>
                <img src="{{ asset('public/adminAssets/images/Group.svg')}}" alt="Group" width="100px">
            </figure>
                <div class="form-group">
                   <h3>Verification</h3>
                   <p>OTP has been sent to <b>benefitme.admin@gmail.com</b> </p>
                </div>
                <ul>
                    <li><input type="name" placeholder="0" required></li>
                    <li><input type="name" placeholder="0" required></li>
                    <li><input type="name" placeholder="0" required></li>
                    <li><input type="name" placeholder="0" required></li>
                </ul> 
                <div class="form-group">
                    <a href="#">Resend me OTP</a>
                </div>
                <div class="form-group">
                <button type="submit" class="btn btn-primary bg-color">Verify</button>
               </div>
         </div>
       </form>
    </div>
   

    <script src="{{ asset('public/adminAssets/js/libaury.js')}}"></script>
    <script src="{{ asset('public/adminAssets/js/bootstrap.min.js')}}"></script>
</body>
</html>