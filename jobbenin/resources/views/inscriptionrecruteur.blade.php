@extends('templates.app')

@section('document')

<main>
    <section class="site-section" >
    <div class="container" style="width:45em;">
    <div class="row justify-content-center align-items-center">
            <div class="card o-hidden border-0 shadow-lg my-5">
             
                    <div class="" style="justify-content: center;">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">
                                <p></p>
                                <p></p>
                                <b> <u>Inscrivez-vous à JobBénin pour trouver des talents qualifiés!</u> </b>
                            </h1>
                        </div>


                        <div class="col-lg-6">

                            <form action="#" class="p-4 border rounded" id="forminsc">



                                <div class="row form-group">
                                    <div class="col-md-12 mb-3 mb-md-0">
                                        <label class="text-black" for="fname">Nom De L'Entreprise</label>
                                        <input type="text" id="fname" class="form-control"
                                            placeholder="Entrez Le Nom de L'Entreprise">
                                    </div>
                                </div>
                                <div class="row form-group mb-4">
                                            <div class="col-md-12 mb-3 mb-md-0">
                                                <label class="text-black" for="fname"> Logo de L'Entreprise</label>
                                                    <div class="description">Les fichiers doivent peser moins de
                                                        <strong>2 Mo</strong>.<br />
                                                        Extensions autorisées :<strong>png jpeg pdf</strong>.</div>
                                                      <div class="file-widget form-managed-file clearfix">
                                                       <input type="file" id="edit-field-inscription-und-0-upload"
                                                        name="files[field_inscription_und_0]" size="50" class="form-file" />
                                                        <input type="hidden" name="field_inscription_[und][0][fid]" value="0" />
                               
                               
                                                     <input type="hidden" name="field_inscription_[und][0][display]" value="1" />

                                                     </div>

                                            </div>
                                            </div>


                                <div class="row form-group">
                                    <div class="col-md-12 mb-3 mb-md-0">
                                        <label class="text-black" for="fname">Ville</label>
                                        <input type="text" id="fname" class="form-control"
                                            placeholder="Entrez La Ville de L'Entreprise">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-12 mb-3 mb-md-0">
                                        <label class="text-black" for="description">Description  de L'Entreprise</label> <br>
                                       <textarea name="description" id="description" cols="70" rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-12 mb-3 mb-md-0">
                                        <label class="text-black" for="fname">Adresse Email
                                            Professionnelle</label>
                                        <input type="text" id="fname" class="form-control"
                                            placeholder="Entrez Une Adresse Email Professionnelle">
                                    </div>
                                </div>
                               
                                <div class="row form-group">
                                    <div class="col-md-12 mb-3 mb-md-0">
                                        <label class="text-black" for="fname">Mot de Passe</label>
                                        <input type="password" id="fname" class="form-control"
                                            placeholder="Choisissez Votre Mot De Passe">
                                    </div>
                                </div>
                                <div class="row form-group mb-4">
                                    <div class="col-md-12 mb-3 mb-md-0">
                                        <label class="text-black" for="fname">Confirmer le Mot de Passe</label>
                                        <input type="password" id="fname" class="form-control"
                                            placeholder="Entrez le mot de Passe ">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <input type="submit" value="S'inscrire" 
                                            class="btn px-4 btn-primary text-white" > 

                                    </div>
                                    <div class="text-center">
                                        <p style="color:#242b5e">
                                            <hr>Vous avez déjà un compte JobBénin ?<a class="" href="{{('connexion')}}"
                                                style="color:#242b5e"><b> <u>Connectez-vous!</u></b> </a>
                                        </p>
                                    </div>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

</main>
@endsection