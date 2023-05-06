@extends('layouts.layout')
    @section('title')
    <title>Insertion</title>
    @endsection
    @section('content')
    <div class="container px-6 mx-auto grid">
        <!-- General elements -->
        <h2
                class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
        >
            Ajouter un nouveau article 
        </h2>
        <form method="post" action="insertArticle">
            @csrf
        <div
                class="px-4 py-3 mb-4 bg-white rounded-lg shadow-md dark:bg-gray-800"
        >
            <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Titre</span>
                <input
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        name="titre" type="text"
                />
            </label>
            <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Image</span>
                <input
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                         type="file" id="formFile"
                />
                <input  type="hidden" id="base64" name="image">
            </label>
            <label class="block mt-4 text-sm">
        <span class="text-gray-700 dark:text-gray-400">
          Categorie
        </span>
                <select name="categorie" id="categorie" onchange="change()"
                        class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                >
                    <?php foreach($categories as $ct) {?>
                    <option value="{{$ct->idcat }}">{{$ct->designation }}</option>
                    <?php } ?>
                </select>
            </label>
            <br>
            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Résumé</span>
                <textarea
                        class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                        rows="3" name="resume"
                ></textarea>
            </label>
            <br>
            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Contenu</span>
                <textarea class="form-control" id="summary-ckeditor" name="contenu"></textarea>
            </label>
            <br>
            <center><input type="submit" class="px-5 py-3 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" value="Ajouter"/></center>
        </div>
            </form>
    </div>    
    @endsection
@section('script')
<script src={{ url('ckeditor/ckeditor.js') }}></script>
<script>
CKEDITOR.replace( 'summary-ckeditor' );
</script>
<script type="text/javascript">
    document.querySelector("input[type='file']").addEventListener("change", function(){
        var file = this.files[0];
        var reader = new FileReader();
        reader.readAsDataURL(file);
        reader.onload = function(){
            var base64 = reader.result;
            var f=document.getElementById("base64");
            f.value=base64;
            console.log(f.value);
        }
    });
</script>
@endsection
