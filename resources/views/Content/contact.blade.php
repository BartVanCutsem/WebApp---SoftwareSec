@extends('layouts.master')

@section('content')
<div class="container">
<form method="Post" action="/MailService/Contact">
    @csrf
    <section class="mb-4">

        <!--Section heading-->
        <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
        <!--Section description-->
        <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly.</p>
    
        <div class="row">
    
            <!--Grid column-->
            <div class="col-md-9 mb-md-0 mb-5">
                <form id="contact-form" name="contact-form" action="mail.php" method="POST">
    
                    <!--Grid row-->
                    <div class="row">
    
                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <label for="name" class="">Your name</label>
                                <input type="text" id="name" name="name" class="form-control" required>
                                
                            </div>
                        </div>
                        <!--Grid column-->
    
                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <label for="email" class="">{{__('Your email address')}}</label>
                                <input type="text" id="email" name="email" class="form-control" required>
                                
                            </div>
                        </div>
                        <!--Grid column-->
    
                    </div>
                    <!--Grid row-->
    
                    <!--Grid row-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form mb-0">
                                <label for="subject" class="">Subject</label>
                                <input type="text" id="subject" name="subject" class="form-control" required>
                                
                            </div>
                        </div>
                    </div>
                    <!--Grid row-->
    
                    <!--Grid row-->
                    <div class="row">
    
                        <!--Grid column-->
                        <div class="col-md-12">
    
                            <div class="md-form">
                                <label for="message">Your message</label>
                                <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" required></textarea>
                                
                            </div>
    
                        </div>
                    </div>
                    <!--Grid row-->
    
                </form>
            </div>
            <!--Grid column-->
    
            <!--Grid column-->
            <div class="col-md-3 text-center">
                <ul class="list-unstyled mb-0">
                    <li><i class="fas fa-map-marker-alt fa-2x"></i>
                        <p>{{__('Belgie, 1755 Lennik')}}</p>
                    </li>
    
                    <li><i class="fas fa-phone mt-4 fa-2x"></i>
                        <p>{{__('+04 123 456 789')}}</p>
                    </li>
    
                    <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                        <p>{{__('Bart.van.Cutsem@student.ehb.be')}}</p>
                    </li>
                </ul>
            </div>
            <!--Grid column-->
            
        </div>
        <br>
        <button class=" btn btn-primary " type="submit">Send to your mail</button>
    </section>
</form>
</div>
@endsection