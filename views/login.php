
<div class="container mt-5">
    <div class="body d-md-flex align-items-center justify-content-between">
        <div class="box-1 mt-md-0 ">

            <img src="views/assets/img/background/pexels-spencer-davis-4353813.jpg" class="" alt="">
        </div>
        <div class=" box-2 d-flex flex-column h-100">
            <div class="mt-5">
                <p class="mb-1 h-1 merriweather fs-3 text-center">Connexion.</p>
                <p class=" mb-2">Explorez la beauté du beau monde.</p>
                <div class="d-flex flex-column ">
                    <p class=" mb-2">Continue avec...</p>
                    <div class="d-flex align-items-center">
                        <form class="form-container row" action="operation" method="POST" data-parsley-validate>
                            <div class="my-4 fw-bold">
                                <input type="email" class="form-control" name="email" placeholder="Enter votre email" required data-parsley-trigger="change" data-parsley-type="email">
                            </div>
                            <div class="my-4 fw-bold">
                                <input type="password" class="form-control" name="password" placeholder="Enter votre password" required data-parsley-trigger="change"
>
                            </div>
                            <div class="my-4 fw-bold  text-center">
                                <button type="submit" name="loginconnect" class="btn btn-order btn-lg rounded-3 merriweather ">Connexion</button>
                            </div>
                        </form>
                    </div>
                    <div class="my-4">
                        <p class="mb-0 fs-5  merriweather">Vous avez déjà un compte? <a  href="inscription" class="text-decoration-none fs-5 merriweather" style="color: #20c997;">S'inscrire</a></p>
                        <div class="btn btn-primary"><span class="fas fa-chevron-right ms-1"></span></div>
                    </div>
                </div>

            </div>
           
        </div>
    </div>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type=" text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>