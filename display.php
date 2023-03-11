<!DOCTYPE html>
<html>

<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(odd) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>

    <h2>Database Information</h2>

    <table>
        <tr>
            <th>Category</th>
            <th>Name</th>
            <th>Designation</th>
            <th>Department</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>
        <?php
        include("db.php");
        $sql = "select * from members ";
        $res = mysqli_query($conn, $sql);
        if (mysqli_num_rows($res) > 0) {
            foreach ($res as $ans) {
        ?>
                <tr>
                    <td><?= $ans['cate']; ?></td>
                    <td><?= $ans['name']; ?></td>
                    <td><?= $ans['desig']; ?></td>
                    <td><?= $ans['dept']; ?></td>
                    <td><?= $ans['college']; ?></td>
                    <td><?= $ans['phone']; ?></td>
                    <td>
                        <a href="edit.php?phone=<?= $ans['phone']; ?>"><button>Edit</button></a>
                        <a href="delete.php?phone=<?= $ans['phone']; ?>"><button>Delete</button></a>
                    </td>
                </tr>
        <?php
            }
        }
        ?>

    </table>

</body>

</html>