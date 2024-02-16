<?php require __DIR__ .'/../partial/head.php' ?>

<?php require __DIR__ . '/../partial/nav.php' ?>

<header class='bg-white shadow'>
  <div class='mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8'>
    <h1 class='text-3xl font-bold tracking-tight text-gray-900'>

      <?= $heading ?>

    </h1>
  </div>
</header>


<main class="p-10">
  <ul class="flex flex-col gap-4 mb-10">
    <?php foreach ($notes as $note): ?>

    <a href="/note?id=<?php echo $note['id']; ?>" class="text-blue-500 hover:underline">

      <li class="text-lg font-bold"><?= htmlspecialchars($note['notes']) ?></li>

    </a>

    <?php endforeach;  ?>

  </ul>


  <a href="/note/create" class="pt-10 text-xl font-bold text-blue-500 hover:underline">
    Create a new note
  </a>

</main>