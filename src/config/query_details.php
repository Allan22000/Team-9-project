<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'includes/head1.php' ?>
</head>
<body>
<div id="wrapper">
    <!-- start header -->
    <header>
        <?php include 'includes/header1.php' ?>
    </header>
    <!-- end header -->

    <section class="callaction">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="big-cta">
                        <div class="cta-text">
                            <h2>List of all submitted queries</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="content">
        <div class="container">
            <div class="row">


                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">#SR.No</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Email</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    $checkUserAlreadyExist = $conn->query("SELECT b.* FROM  users AS b  ORDER BY b.id DESC");
                    $getAllDetails = $checkUserAlreadyExist->fetchAll(PDO::FETCH_ASSOC);
                    ?>

                    <?php $i = 1; ?>
                    <?php if (!empty($getAllDetails)): ?>
                        <?php foreach ($getAllDetails as $getAllDetail): ?>
                            <tr>
                                <th scope="row"><?= $i++ ?></th>
                                <td><?= $getAllDetail['firstName'] ?></td>
                                <td><?= $getAllDetail['lastName'] ?></td>
                                <td><?= $getAllDetail['email'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </section>
    <footer style="background-color:#282d32;">
        <?php include 'includes/footer1.php' ?>
    </footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<?php include 'includes/bottom1.php' ?>
</body>
</html>