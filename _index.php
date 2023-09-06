<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <div class="bg-white py-24 sm:py-32">
    <div class="mx-auto grid max-w-7xl gap-x-8 gap-y-20 px-6 lg:px-8 xl:grid-cols-3">
      <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
        <?php
        class Team
        {
          public $name;
          public $role;
          public $image;

          public function __construct($name, $role, $image)
          {
            $this->name = $name;
            $this->role = $role;
            $this->image = $image;
          }
        }

        $teams = [
          // [
          //   "name" => "Leslie Alexander",
          //   "role" => "Co-Founder / CEO",
          //   "image" => "https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
          // ],
          new Team("Wahyu", "Test", "abc")
        ]
        ?>

        <?php foreach ($teams as $team) : ?>
          <li>
            <div class="flex items-center gap-x-6">
              <img class="h-16 w-16 rounded-full" src="<?php echo $team->image ?>" alt="">
              <div>
                <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900"><?php echo $team->name ?></h3>
                <p class="text-sm font-semibold leading-6 text-indigo-600"><?php echo $team->role ?></p>
              </div>
            </div>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>

</body>

</html>