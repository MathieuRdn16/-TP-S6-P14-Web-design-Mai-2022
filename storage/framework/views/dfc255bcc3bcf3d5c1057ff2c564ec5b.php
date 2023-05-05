    <?php $__env->startSection('meta'); ?>
    <meta name="description" content="<?php echo e($article->titre); ?>" />
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('title'); ?>
    <title><?php echo e($article->titre); ?></title>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('content'); ?>   
        <div class="container px-6 mx-auto grid">
            <!-- General elements -->
           
            <div class="grid gap-6 mb-8 xl:grid-cols-12">
                <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
               <center>
                    <h3>
                        <?php echo e(strtoupper($article->Categorie->designation)); ?>: 
                    </h3>
               </center>
                    <h1
                    class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                        <strong ><?php echo e(strtoupper($article->titre)); ?></strong>
                    </h1>
                    <img src="<?php echo e($article->image); ?>" />
                    <p >
                        <?php echo $article->contenu ?>
                    </p>
                    <br>
                    <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                       href="/modifArticle/<?php echo e($article->idarticle); ?>">
                        <input type="button" class="px-5 py-3 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" value="Modification"/>
                    </a>
                </div>
            </div>
        </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\work\itu\webDesign\tp\examen_final\info_AI\resources\views/ficheArticle.blade.php ENDPATH**/ ?>