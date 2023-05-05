    <?php $__env->startSection('title'); ?>
    <title>Insertion</title>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('content'); ?>
    <div class="container px-6 mx-auto grid">
        <!-- General elements -->
        <h2
            class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
        >
            Modifier l'article
        </h2>
        <form method="get" action="/modificationArticle">
            <input type="hidden" value="<?php echo e($article->idarticle); ?>" name="idart">
            <div
                class="px-4 py-3 mb-4 bg-white rounded-lg shadow-md dark:bg-gray-800"
            >
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400" >Titre</span>
                    <input
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        name="titre" type="text" value="<?php echo e($article->titre); ?>"
                    />
                </label>
                <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Image</span>
                <img src="<?php echo e($article->image); ?>" id="image"/>
                <input
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                         type="file" id="formFile"
                />
                <input  type="hidden" id="base64" name="image" value="<?php echo e($article->image); ?>">
            </label>
                <label class="block mt-4 text-sm">
        <span class="text-gray-700 dark:text-gray-400">
          Categorie
        </span>
                    <select name="categorie" id="categorie" onchange="change()"
                            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                    >
                        <option value="<?php echo e($article->Categorie->idcat); ?>"><?php echo e($article->Categorie->designation); ?></option>
                        <?php foreach($categories as $ct) {
                            if($article->Categorie->idcat!=$ct->idcat) {
                        ?>
                            <option value="<?php echo e($ct->idcat); ?>"><?php echo e($ct->designation); ?></option>
                        <?php } }?>
                    </select>
                </label>
                <br>
                <label class="block mt-4 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Résumé</span>
                    <textarea
                        class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                        rows="3" name="resume"
                    ><?php echo e($article->resume); ?></textarea>
                </label>
                <br>
                <label class="block mt-4 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Contenu</span>
                    <textarea class="form-control" id="summary-ckeditor" name="contenu" ><?php echo e($article->contenu); ?></textarea>
                </label>
                <br>
                <center><input type="submit" class="px-5 py-3 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" value="Modifier"/></center>
            </div>
        </form>
    </div>
        <?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="../ckeditor/ckeditor.js"></script>
<script>
CKEDITOR.replace( 'summary-ckeditor' );
</script>
<script type="text/javascript">
    $img=document.getElementById("image");
    document.querySelector("input[type='file']").addEventListener("change", function(){
        var file = this.files[0];
        var reader = new FileReader();
        reader.readAsDataURL(file);
        reader.onload = function(){
            var base64 = reader.result;
            var f=document.getElementById("base64");
            f.value=base64;
            console.log(f.value);
            $img.src=f.value;
        }
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\work\itu\webDesign\tp\examen_final\info_AI\resources\views/modifArticle.blade.php ENDPATH**/ ?>