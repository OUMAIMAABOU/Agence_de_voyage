
 


        

                <div class="container mt-5">
                    <div class="body d-md-flex align-items-center justify-content-between">
                        <div  class="box-1 mt-md-0 d-none d-md-block" style="width:40% ;">

                            <img src="views/assets/img/background/pexels-michael-block-3225528.jpg" alt="">
                        </div>
                        <div class=" box-2 d-flex flex-column mx-auto">
                            <div class="mt-5">
                                <p class="mb-1 h-1 merriweather fs-4 text-center" style="border-bottom: #20c997 3px solid;">Inscription.</p>
                                <p class=" mb-2">Explorez la beauté du beau monde.</p>
                                <div class="d-flex flex-column ">
                                    <p class=" mb-2">Continue avec...</p>
                                    <div class="d-flex align-items-center">
                                        <form class="form-container row" action="operation" method="POST" data-parsley-validate>
                                           <div class="mb-3 fw-bold" >
                                       <input type="text" hidden class="form-control"  name="type" value="6"  >
                                       
                                   </div>
                                            <div class="mb-3 col-md-6 fw-bold">
                                                <input type="text" class="form-control" id="name" name="nom" placeholder="Enter name complet"required data-parsley-trigger="change">
                                            </div>
                                            <div class="mb-3 col-md-6 fw-bold">
                                                <input type="text" name="cin" class="form-control" placeholder="Enter votre CIN" class="form-label"required data-parsley-trigger="change">

                                            </div>

                                            <div class="mb-3 col-md-6 fw-bold">
                                                <select class="form-control" name="genre" id="genre">
                                                    <option value="default">Genre </option>
                                                    <option value="Femme">Femme </option>
                                                    <option value="Homme" selected>Homme </option>
                                                </select>
                                            </div>

                                            <div class="mb-3 col-md-6 fw-bold">
                                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter votre email" required data-parsley-trigger="change" data-parsley-type="email">
                                            </div>

                                            <div class="mb-3 col-md-6 fw-bold">
                                                <input type="text" class="form-control" name="password" id="password" placeholder="Enter votre password" required data-parsley-trigger="change" data-parsley-length="[4, 20]">

                                            </div>
                                            <div class="mb-3 col-md-6 fw-bold">
                                                <input type="text" class="form-control" id="phone" name="Phone" placeholder="Enter phone"  required data-parsley-trigger="change" data-parsley-type="digits" data-parsley-length="[10, 20]">

                                            </div>
                                            <div class="mb-3 col-md-6 fw-bold">
                                                <input type="text" class="form-control" name="configpassword" placeholder="Config Password" data-parsley-equalto="#password"  required data-parsley-trigger="change">
                                            </div>

                                            <div class="mb-3 col-md-6 fw-bold">
                                                <input type="text" class="form-control" id="adrees" name="adresse" placeholder="Enter Adresse"  required data-parsley-trigger="change">
                                            </div>
                                            <div class="mb-3 col-12 fw-bold">
                                                <input type="file" class="form-control" id="image" name="image" placeholder="Enter name complet"  required data-parsley-trigger="change">
                                            </div>
                                            <div class="my-4 fw-bold  text-center">
                                                <button type="submit" name="inscription" class="btn btn-order btn-lg rounded-3 merriweather ">Connexion</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="my-4">
                                        <div class="btn btn-primary"><span class="fas fa-chevron-right ms-1"></span></div>
                                    </div>
                                </div>
                            </div>

                        </div>
               

              
            </div>
        </div>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type=" text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>