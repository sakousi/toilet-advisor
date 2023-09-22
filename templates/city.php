<?php require 'component/header.php' ?>

<!-- create a card of each city with tailwind -->

<div class="flex flex-wrap justify-center">
    <?php foreach($cities as $city): ?>
    <main class="mb-auto">
            <div class="max-w-sm rounded overflow-hidden shadow-lg m-4">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2"><?= $city->getName() ?></div>
                    <p class="text-gray-700 text-base">
                        <?= $city->getZipCode() ?>
                    </p>
                </div>
                <div class="px-6 pt-4 pb-2">
                    <a href="index.php/toilet?cityId=<?= $city->getId() ?>" class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Voir les toilettes</a>
                </div>
            </div>
    </main>
    <?php endforeach ?>
</div>

<?php require 'component/footer.php' ?>