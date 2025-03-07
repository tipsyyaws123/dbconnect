<?php
    require_once("includes/dbconnect.php")
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tables - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php include("includes/header.php");?>
        <div id="layoutSidenav">
        <?php include("includes/menu.php");?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Aboutus</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Aboutus</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                                .</br>
                                <a href="" class="btn btn-primary">Add New Record</a>
                            </div>
                        </div>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="nav-records-tab" data-bs-toggle="tab" data-bs-toggle="abouttable" type="button" role="tab" aria-selected="true">Records</button>
                            </li>
                            <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Data Entry</button>
                            </li>
                        </ul>
                        
                        
                    <div class="tab-content">
                    <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                    <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>Content</th>
                                        
                                        </tr>
                                    </thead>
                                <tbody>
                                <?php
                                    $sql="SELECT * FROM aboutus ORDER BY atitle ";
                                    $stmt=$con->prepare($sql);
                                    $stmt -> execute();
                                    $tableabout="";
                                    while($row=$stmt->fetch()){
                                        $tableabout.="<tr>";
                                        $tableabout.="<td>{$row[0]}</td>";
                                        $tableabout.="<td>{$row[1]}</td>";
                                        $content = substr(nl2br($row[2]),1,300)."...";
                                        $tableabout.="<td>{$content}</td>";
                                        $tableabout.="</tr>";
                                    } 
                                    echo $tableabout;
                                    ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                </main>
                <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                        <div class="row">
                            <div class="col col-12 m-5">
                                <h3>Data Entry:</h3>
                                <form action="process_about.php" method="POST">
                                    <div class="mb-3">
                                        <label for="texttitle" class="form-label">Title</label>
                                        <input type="text" class="form-control" name="txttitle" required/>
                                        </div>
                                        <div class="mb-3">
                                        <label for="textcontent" class="form-label">Content</label>
                                        <textarea class="form-control" name="txtcontent" rows="3" required></textarea>
                                    </div>
                                    <input type="submit" value="Submit">
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
                <!-- footer -->
                 <?php include("includes/footer.php");?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
