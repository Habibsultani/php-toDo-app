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


  <a href="/notes" class="hover:underline text-blue-500">
    Go back to all notes
  </a>

  <p class="mt-5"><?= htmlspecialchars($note["notes"])  ?></p>


  <form class="mt-10" method="POST">

    <input type="hidden" name="_method" id="_method" value="DELETE">

    <input type="hidden" name="deleteValue" id="deletValue" value="<?= $note['id'] ?>">

    <button class="font-semibold text-red-500 hover:underline" type="submit">Delete this note</button>

  </form>

</main>