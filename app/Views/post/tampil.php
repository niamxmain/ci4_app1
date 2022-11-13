<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Tampil Post</title>
</head>

<body>
    <div class="p-3 bg-dark text-white">
        <h3>My Blog</h3>
    </div>
    <nav class="navbar navbar-expand-sm bg-light">
        <ul class="navbar-nav">
            <li class="nav-item"><a href="<?= base_url() ?>index.php/PostController" class="nav-link">Post</a>
            </li>
        </ul>
    </nav>
    <div class="container">
        <div class="card mt-3">
            <div class="card-header">Tambah Post</div>
            <div class="card-body">
                <form action="<?= base_url() ?>index.php/PostController/tambahPost" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Body</label>
                        <textarea name="body" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Picture</label>
                        <input type="file" name="picture">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Tambah" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
        <div class="card mt-3">
            <div class="card-header">Data Post</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hovered table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Body</th>
                                <th>Picture</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($tbl_post as $d) : ?>
                                <tr>
                                    <td><?= $d['id'] ?></td>
                                    <td><?= $d['title'] ?></td>
                                    <td><?= $d['body'] ?></td>
                                    <td><img src="assets/picture/<?= $d['picture'] ?>" width="200"></td>
                                    <td><?= $d['created_at'] ?></td>
                                    <td><?= $d['updated_at'] ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>