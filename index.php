<?php require __DIR__ . '/layouts/head.php'; ?>

<div class="container">
  <div class="row mt-5">
    <div class="col-2" v-for="disk in disks">
      <div class="card bg-secondary text-white">
        <img class="img-fluid" :src="disk.poster" alt="disk.title">
        <div class="card-body">
          <h4>{{disk.title}}</h4>
          <p>
            {{disk.author}}
          </p>
          <p>
            {{disk.year}}
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<?php require __DIR__ . '/layouts/footer.php'; ?>