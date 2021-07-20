<?php
require_once 'header.php';
require_once 'database.php';
?>
<section class="vh-100 gradient-custom">
    <div class="container-fluid ">
        <div class="row justify-content-center align-items-center">
            <table class="table table-success table-striped table-hover w-75 m-5">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Encrypted Password</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>

                <tbody>
                    <?php

                    $sql = "SELECT * FROM user";

                    if ($result = mysqli_query($conn, $sql)) {

                        while ($row = mysqli_fetch_assoc($result)) {

                            echo '<tr>
                        <th scope="row">' . $row['ID'] . '</th>' .
                                '<td>' . $row['name'] . '</td>' .
                                '<td>' . $row['password'] . '</td>' .
                                '<td>'

                                .
                                '<a class="btn btn-warning btn-sm" role="button "href="edit.php?userid=' .

                                $row["ID"]  . '"' .
                                '>' . 'EDIT</a>  '

                                .
                                '<a class="btn btn-danger btn-sm" role="button "href="deleteprocess.php?userid=' .

                                $row["ID"]  . '"' .
                                '>' . 'Delete</a>' . '</td>' .

                                '</tr>';
                        }
                    }

                    ?>

                </tbody>
            </table>
        </div>
    </div>
</section>
<?php

require_once 'footer.php'
?>