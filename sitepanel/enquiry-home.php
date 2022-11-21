<?php 

$page_title="Product Management";

$page_subtitle="Manage Product Category";

include("header.php");

include("left-nev.php");

error_reporting(0);
$parent_url=explode("/",$_SERVER['REQUEST_URI']);
$ct=count($parent_url);
$parent_id=$parent_url[$ct-1];
if($parent_url[$ct])
{
$cpgnum=$parent_url[$ct];
}
else
{
$cpgnum=0;	
}

?>

<!--######## delete cancel ########-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!--######## delete cancel ########-->

<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">

        <h1> Enquiry Page</h1>

        <ol class="breadcrumb">

            <li><a href="<?php echo base_url('sitepanel/dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>

            <li><a href="<?php echo base_url('sitepanel/dashboard') ?>">Dashboard</a></li>

          

        </ol>

    </section>



    <!-- Main content -->

    <section class="content">

        <div class="row">

            <div class="col-xs-12">



                <div class="box">



                    <!-- /.box-header -->

                    <div class="box-body">

                        <script>
                            $(document).ready(function () {

                                $("#page-msg").fadeOut(2000)

                            });
                        </script>
                        

                                <?php

		    $totinq=$this->inquirymanagement->getviewinquiry();

            ?>

                                

                               





                            <!-- /.box -->



                       


                        <div class="col-12 mt-4">
                            <div class="card">
                                <div  class="card-header">
                                    <h3 class="card-title"> All Enquiry </h3>
                                    <div class="card-tools">
                                        
                                    </div>
                                </div>

                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Message</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             <?php

			   $i=1;

			   foreach($totinq as $resinq):

			   if($i%2<>0)

			   {

				 

				 $clr="primary";

                 				 

			   }

			   else

			   {

				$clr="danger"; 



			   }

			   if($i==1)

			   {

				   $open="in";

			   }

			   else{

				   $open="";

			   }

			   ?>

                                            <tr>
                                                
                                                <td><?=ucwords($resinq['name']);?></td>
                                                <td><?=ucwords($resinq['phone']);?></td>
                                                <td><?=ucwords($resinq['email']);?></td>
                                                <td><?=ucwords($resinq['message']);?></td>
                                                <td>inquiry on <?=ucwords($resinq['date']);?></td>
                                            </tr>
                                            <?php $i++; endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                        </div>
                    </div>

                    <!-- /.box-body -->

                </div>

                <!-- /.box -->

            </div>

            <!-- /.col -->

        </div>

        <!-- /.row -->

    </section>

    <!-- /.content -->

</div>

<!-- /.content-wrapper -->

<?php include("footer.php");?>