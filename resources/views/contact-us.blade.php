@extends('frontend.master')
@section('content')


<div class="about-us">
    <label>
        <figure>
            <img src="{{ asset('public/frontendAssets/images/graphic_contact_us(1).png')}}" alt="icon" width="120px">
        </figure>
        Contact Us
    </label>
</div>
<div class="transactions-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <h3>California</h3>
                <ul>
                    <li>
                        <a href="#">
                            <img src="{{ asset('public/frontendAssets/images/c_address_benefitme.png')}}" alt="icon">
                            909 Sardis Station, Minneapolis, 55402
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset('public/frontendAssets/images/c_email_benefitme.png')}}" alt="icon">
                            supportbenefitme@gmail.com
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset('public/frontendAssets/images/c_call_benefitme.png')}}" alt="icon">
                            +1 0012 0012 1200
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-6 col-sm-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39592.10850218666!2d77.62949152053883!3d28.705166444054072!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390c8e805851396d%3A0xefc5478b43db1239!2sPilkhuwa%2C%20Uttar%20Pradesh%20245304!5e0!3m2!1sen!2sin!4v1640665791270!5m2!1sen!2sin" width="100%" height="230" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</div>
@endsection

@section('pagejs')
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $("#singup_mod").click(function() {
            $('#loginModal').modal('hide');
        });



        $("#login_mod").click(function() {
            $('#singupModal').modal('hide');

        });
    });
</script>
@stop