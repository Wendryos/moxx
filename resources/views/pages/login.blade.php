@extends('app')
@section('title', 'Login')

@push('styles')
<style>
    body {
        background: rgba(34, 32, 29,1);
        color: #fff;
    }
    .field-login {
   
        min-height: 425px;
        height: auto;
        border: none;
        border-radius: 0px;
        background: #172029;
        color: #fff;
        position: fixed;
        top:  50%;
        left: 50%;
        transform: translateX(-50%) translateY(-50%);
        color: rgb(26, 38, 53);
        padding: 35px;
        box-shadow: 0 0 25px rgba(0, 0, 0, 0.4);
        z-index: 9999;
    }

    @media only screen and ( min-width: 1000px ) {
        .field-login { width: 20%; }
        .field-login .field-body  {   width: calc( 100% - 90px ); padding: 45px;   }
    }

    @media only screen and ( min-width: 600px ) and ( max-width: 1000px ) {
        .field-login              { width: 40%; height: 50%;                       }
        .field-login .field-body  {   width: calc( 100% - 90px ); padding: 45px;   }
    }
    @media only screen and ( min-width: 425px ) and ( max-width: 600px ) {
        .field-login              { width: 60%; height: 50%; }
        .field-login .field-body  {   width: calc( 100% - 90px ); padding: 45px;   }
    }
    @media only screen and ( min-width: 000px ) and ( max-width: 425px ) {
        .field-login              { width: 100%; height: 100%;                     }
        .field-login .field-body  {   width: calc( 100% - 125px ); padding: 45px;  }
        .field-footer             {  position: relative; top: 280px!important;     }
        .create_account           {  position: relative; top: 325px!important;     }
    }


    .field-title {
        text-align: center;
        font-weight: bolder;
        text-shadow: 0 0 7px rgba(245, 246, 252, 0.9);
        font-size: 48px;
        color: #f1f1f1;
    }
    .field-login .field-body {
        position: absolute;
        top:  15%;
        left: 50%;
        transform: translateX(-50%);
     
       
    }
    .field-group {
        display: grid;
    }
    .field-group label { 
        opacity: 0;
        font-size: 14px;
        text-shadow: 0 0 2px rgb(34, 44, 84,0.3);
        color: #ffffff;
        margin-left: 0px;
    }
    .field-group .field-input {
        border: none;
        border-bottom: 1px solid rgba(255, 255, 255, 0.8);
        border-radius: 2px;
        padding: 10px;
        margin-top: 5px;
        margin-bottom: 20px;
        outline: none;
        color: #fff;
        background: none;
        padding-left: 35px;
        width: auto;
    }
    .field-group #icon-password, .field-group #icon-mail  {
        z-index: 999999;
        color: rgba(255, 255, 255, 0.6);
        position: relative;
        top: 33px;
        width:  0px;
        height: 0px;
        background: red;
    
    }
    .field-group #view-password {
        z-index: 999999;
        color: rgba(255, 255, 255, 0.6);
        position: relative;
        top: -45px;
        left: calc(100% - 25px);
        width:  0px;
        height: 0px;
        background: red;
        cursor: pointer;
    
    }


    
    .field-group .field-input:focus {
        border-bottom: 1px solid #ffffff;
        box-shadow: 0px 3px 0.1px rgba(255, 255, 255,0.08);
        
     
    }
  
    #forgot_account {
        color: #fff;
        text-decoration: none;
        text-shadow: 0 0 2px #fff;
        
    }

    #forgot_account:hover, #forgot_account:focus {
        color: rgb(13, 204, 147);
        text-decoration: none;
        text-shadow: 0 0 2px #fff;
    }

    .field-footer {
        position: relative;
        top: 254px;
        width: 100%;
        display: flex;
        justify-content: center;
    }

  .field-footer button {
        cursor: pointer;
        background:rgb(13, 204, 147);
        color: #fff;
        min-width: 55%;
        border: none;
        padding: 15px;
        font-size: 16px;
        text-shadow: 0 0 3px rgba(255, 255, 255, 0.8);
        border-radius: 25px;
        transition: 0.7s;
        font-weight: 500;
    }

      .field-footer button:hover {
        background:rgb(12, 179, 129);
        box-shadow:  0 0 15px rgba(0, 0, 0, 1);
    }

    .create_account {
        position: relative;
        top: 285px;
        width: 100%;
        display: flex;
        justify-content: center;
        text-align: center;
    }
    .create_account a {
        color: #fff;
        text-decoration: none;
        text-shadow: 0 0 2px #fff;
    }

    .create_account a:hover, .create_account a:focus {
        color: rgb(13, 204, 147);
        text-decoration: none;
        text-shadow: 0 0 2px #fff;
    }


.wallpaper {
    width:  100%;
    height: 100%;
    object-fit: cover;
    position: fixed;
    top: 0; left: 0;
    filter: blur(100px);
    z-index: 0;
}

::-webkit-input-placeholder { /* WebKit, Blink, Edge */
    color:    rgba(255, 255, 255,0.8);
}
:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
   color:     rgba(255, 255, 255,0.8);
   opacity:  1;
}
::-moz-placeholder { /* Mozilla Firefox 19+ */
   color:    rgba(255, 255, 255,0.8);
   opacity:  1;
}
:-ms-input-placeholder { /* Internet Explorer 10-11 */
   color:    rgba(255, 255, 255,0.8);
}
::-ms-input-placeholder { /* Microsoft Edge */
   color:    rgba(255, 255, 255,0.8);
}






</style>
@endpush




@section('page')
    <img class="wallpaper"  src="{{ asset('images/almoxarifado_background.jpg') }}"></div>

     <div class="field-login">
        <div class="field-title"> MOXX </div>
        <form action="javascript:void()" id="form-login">
            <div class="field-body"> 
            
                    <div class="field-group">
                        <i class="fas fa-envelope" id="icon-mail"></i>
                        <label for="user-email" id="label-email"> E-mail </label>
                        <input type="email" name="email" id="user-email"  placeholder="E-mail" class="field-input" onfocus="viewLabel('label-email', 'user-email')" onblur="blurLabel('label-email', 'user-email')"  required autocomplete="off">
                    </div>
                    <div class="field-group">
                        <i class="fas fa-lock" id="icon-password"></i>
                        <label for="user-password" id="label-senha"> Senha </label>
                        <input type="password" name="password" id="user-password"  placeholder="Senha" class="field-input"  onfocus="viewLabel('label-senha', 'user-password')" onblur="blurLabel('label-senha', 'user-password')"  required>
                        <i class="far fa-eye" id="view-password"></i>
                    </div>
                  
                        <a href="#" id="forgot_account"> Esqueceu seus dados? </a>
                   
                 
            </div>
     
            <div class="field-footer">
                    <button type="submit"> Login </button>
            </div>
            <div class="create_account">
                <a href="#"> Ainda não possue uma conta? </a>
            </div>
        </form>
        
    </div>

@endsection

@push('scripts')
     <script>
     
         function viewLabel(e, ee) {
            document.querySelector('#' + ee).removeAttribute('placeholder');
            document.querySelector('#' + e).style = 'transition:0.5s;opacity: 1;';
         }

         function blurLabel(e, ee) {
             let el = document.querySelector('#' + ee);
             ( el.getAttribute('id') == 'user-email' ) ? el.setAttribute('placeholder', 'E-mail') : el.setAttribute('placeholder', 'Senha');
             document.querySelector('#' + e).style = 'transition:0.1s;opacity: 0;';
         }


         document.querySelector("#view-password").addEventListener('click', function() {
                let el = document.querySelector("#user-password");
                ( el.getAttribute('type') == 'password')      ? el.setAttribute('type', 'text')                : el.setAttribute('type', 'password');
                ( this.getAttribute('class') == 'far fa-eye') ? this.setAttribute('class', 'far fa-eye-slash') : this.setAttribute('class', 'far fa-eye');
         });
 
         
         document.querySelector("#form-login").addEventListener('submit', function() {

            let data = new FormData(this);
       
            const url = "https://api.github.com/gists"
            const body = { name: "teste" }

            fetch(url, {
            method: 'POST',
            body: JSON.stringify(body)
            })
            .then((res) => res.json())
            .then((response) => alert(response))

         });

    </script>
@endpush