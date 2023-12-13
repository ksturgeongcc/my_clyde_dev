<?php include '../../partials/header.php'; ?>
<?php include '../../config/config.php'; ?>
<?php include '../../queries/newsQuery.php'; ?>
<main class="my-8">
        <div class="container mx-auto px-6">
            <h3 class="text-gray-700 text-2xl font-medium">News</h3>
            <span class="mt-3 text-sm text-gray-500">Click on a news item to read the full article</span>
            <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">
            <?php while ($news->fetch()): ?>
                <div class="w-full max-w-sm mx-auto flex items-center flex-col rounded-md shadow-md overflow-hidden">
                    <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('https://images.unsplash.com/photo-1495856458515-0637185db551?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80')">
                        
                    </div>
                    <div class="px-5 py-3">
                        <h3 class="text-gray-700 uppercase my-6"><?= $title ?></h3>
                        <span class="text-gray-500 mt-2"><?= $description ?></span>                 
                    </div>
                    <button class="group my-6 relative h-12 w-48 overflow-hidden rounded-lg bg-white text-lg shadow">
                        <div class="absolute inset-0 w-3 bg-amber-400 transition-all duration-[250ms] ease-out group-hover:w-full"></div>
                        <span class="relative text-black group-hover:text-white">Read More</span>
                    </button>                
                </div>
                <?php endwhile ?>
            </div>
        </div>
    </main>
<?php include '../../partials/footer.php'; ?>
