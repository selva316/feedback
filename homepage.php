<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   

    <title>Location</title>
	<link rel="icon" type="image/png" href="../images/logo.png"/>
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700|Noto+Serif:400,700"> 
    <!-- Bootstrap core CSS -->
    <link href="asset/css/jquery-ui.min.css" rel="stylesheet">
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="datatables/css/jquery.dataTables.css" />
    <link href="asset/css/datepicker.css" rel="stylesheet">
    <link href="asset/css/font-awesome.min.css" rel="stylesheet">
    <link href="asset/css/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="asset/css/menu.css">
	
    <script src="asset/js/ie.js"></script>
	<script type="text/javascript" src="asset/js/menuscript.js"></script>
   	
  </head>
  
  <body>
	<?php include('menu.php');?>
    <!-- Description Modal -->
    <div id="desModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add Location</h4>
                </div>
                <div class="modal-body">
                    <div id="txtfield"></div>
                    
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label class="control-label">Location Name <span style="color:red">*</span></label>
								<input type="text" id="location" placeholder="Location" class="form-control" name="location" />
							</div>	
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label class="control-label">Email ID <span style="color:red">*</span></label>
								<input type="text" id="email" placeholder="Email ID" class="form-control" name="email" />
								<input type="hidden" id="locid" class="form-control" name="locid" value="" />
							</div>	
						</div>
					</div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="saveAction" class="btn btn-default" data-dismiss="modal" value="save">Save</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Description Modal -->
	<form name="frminvoice" action="fr_locationdb.php" method="post" onsubmit="return frmvalidation()">
    <div class="panel panel-success">
	<div class="panel-heading">
		<center><label><b>Location List</b></label></center></div>
	</div>		
	<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div style="margin-left:30px;margin-bottom:10px;">
						<!--<a href="index.php" class="btn btn-large btn-success">Add Location</a>-->
						<button type="button" class="btn btn-success" id="finalize" data-toggle="modal" data-target="#desModal">
							Add Location	</button>
					</div>
					
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="panel panel-default">
				<div class="panel-heading">Location List</div>
				<div class="panel-body">
					<table id="example" class="display" cellspacing="0" width="100%">
						<thead>
							<tr>
								
								<th>Location ID</th>
								<th>Location Name</th>
								<th>Email ID</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$query = $dbh->query("select * from fb_location");
								$result = $query->fetchAll();
								foreach($result as $row)
								{
									$locidv = $row['LOCID'];
									echo "<tr>";
									//echo "<td><a class='info_link' href='javascript:editLocation()'>".$locidv."</a></td>";
									echo "<td><a href='javascript:editLocation(\"$locidv\")'>".$locidv."</a></td>";
									echo "<td>".ucfirst($row['LOCNAME'])."</td>";
									echo "<td>".ucfirst($row['EMAIL'])."</td>";
									$status = $row['DISABLE'];

									if($row['DISABLE'] == 'Y')
									{

										echo "<td><a  class='btn btn-success' href='javascript:disableLocation(\"$locidv\",\"$status\")'>Enable</a></td>";
									}
									else{
										echo "<td><a  class='btn btn-warning' href='javascript:disableLocation(\"$locidv\",\"$status\")'>Disable</a></td>";
									}
									
									echo "</tr>";
									
								}
								
							?>
						</tbody>
					</table>
			</div>
			</div> 
           
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
</form>
    <script src="asset/js/jquery.min.js"></script>
    <script src="asset/js/jquery-ui.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
    <script src="asset/js/bootstrap-datepicker.js"></script>
    <script src="asset/js/auto.js"></script>
	<script src="datatables/js/jquery.dataTables.js"></script>
	<script>
	$(document).ready(function() {
		$('#example').DataTable( {
			columnDefs: [ {
				targets: [ 0 ],
				orderData: [ 0, 1 ]
			}, {
				targets: [ 1 ],
				orderData: [ 1, 0 ]
			}, {
				targets: [ 3 ],
				orderData: [ 3, 0 ]
			}]
		});
	});
	

	$("#saveAction").click(function(){
		var url = '';
		if ($("#saveAction").text() == "Update")
			url = 'frmLocationedit_dp.php?location='+ $("#location").val()+"&email="+$("#email").val()+"&locid="+$("#locid").val();
		else
			url = 'frmLocation_dp.php?location='+ $("#location").val()+"&email="+$("#email").val();
		
		$.ajax({
			type: 'post',
			url: url,
			success:function(data){
				window.location.href="homepage.php";
			}
		});
	});
	
	$("#finalize").click(function(){
		$('.modal-title').html('Add Location');

		$("#location").val('');
		$("#email").val('');
		$("#saveAction").val("Save");
		$("#saveAction").text("Save");
		$("#locid").val('');
	});


	function editLocation(locid)
	{
		
		//var locid = $('.info_link').text();
		$('#desModal').modal('show'); 
		$('.modal-title').html('Edit Location');
		$.ajax({
			type: 'post',
			dataType:'json',
			data:{'location':locid},
			url: 'fetchLocation.php',
			success:function(data){
				
				$("#location").val(data.locname);
				$("#email").val(data.email);
				$("#saveAction").val("Update");
				$("#saveAction").text("Update");
				$("#locid").val(locid);
			}
			
		});
	}
	
	function disableLocation(locid,status)
	{
		$.ajax({
			type: 'post',
			dataType:'json',
			data:{'location':locid,'status':status},
			url: 'disableLocation.php',
			success:function(data){
				window.location.href="homepage.php";
			}
			
		});
	}
		
	</script>
  </body>
</html>