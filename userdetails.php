<?php 
	include('header.php'); 
	include('model/Location.php'); 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>User Details</title>
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
                    <h4 class="modal-title">Add User</h4>
                </div>
                <div class="modal-body">
                    <div id="txtfield"></div>
						<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label class="control-label">User Name <span style="color:red">*</span></label>
								<input type="text" id="username" placeholder="User Name" class="form-control" name="username" />
							</div>	
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label class="control-label">Password <span style="color:red">*</span></label>
								<input type="text" id="password" placeholder="Password" disabled="true" class="form-control" name="password" />
							</div>	
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label class="control-label">Location <span style="color:red">*</span></label>
								<select id="location"  disabled="true" name="location" class="form-control">
									<?php 
										
										$query = $dbh->query("select * from fb_location");
										$result = $query->fetchAll();
										foreach($result as $row)
										{
											echo "<option value=".$row['LOCID'].">".$row['LOCNAME']."</option>";
										}
									?>
								</select>
							</div>	
						</div>
					</div>
                </div>
                <div class="modal-footer">
					<div id="saveBtn">
						<?php if(count($result)>0) { ?> 
						<button type="button" id="saveAction" style="display:none;" class="btn btn-default" data-dismiss="modal">Save</button>
						<?php } ?>
					</div>
                </div>
            </div>
        </div>
    </div>
    <!-- Description Modal -->
	<form name="frminvoice" action="fr_locationdb.php" method="post" onsubmit="return frmvalidation()">
    <div class="panel panel-success">
	<div class="panel-heading">
		<center><label><b>User List</b></label></center></div>
	</div>		
	<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div style="margin-left:30px;margin-bottom:10px;">
						<!--<a href="index.php" class="btn btn-large btn-success">Add Location</a>-->
						<button type="button" class="btn btn-success" id="finalize" data-toggle="modal" data-target="#desModal">
							Add User	</button>
					</div>
					
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="panel panel-default">
				<div class="panel-heading">User List</div>
				<div class="panel-body">
					<table id="example" class="display" cellspacing="0" width="100%">
						<thead>
							<tr>
								
								<th>User Name</th>
								
								<th>Location</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$query = $dbh->query("select * from fb_userdetails");
								$result = $query->fetchAll();
								foreach($result as $row)
								{
									echo "<tr>";
									echo "<td>".ucfirst($row['username'])."</td>";
									$oloctation = new Location($dbh);
									
									echo "<td>".ucfirst($oloctation->locationName($row['location']))."</td>";
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
		
		
		$('#tbladduser').DataTable( {
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
	
		
	$( "#username" ).blur(function() {
		$.ajax({
			type: 'post',
			url: 'frmUserAvailable.php?username='+ $("#username").val(),
			success:function(data){
				
				if(data=="true"){
					$("#password").prop('disabled',false);
					$("#location").prop('disabled',false);
					$("#saveAction").css("display","block");
					$("#username").css("border","1px solid #ccc");
					$("#username").css("box-shadow","0 1px 1px rgba(0, 0, 0, 0.075) inset");
				}
				else{
					$("#username").css("border","1px solid #c7254e");
					$("#username").css("box-shadow","0 1px 1px rgba(0, 0, 0, 0.075) inset");
				}
				
			}
		});
	});
	
	$("#saveAction").click(function(){
		$.ajax({
			type: 'post',
			url: 'frmUser_dp.php?location='+ $("#location").val()+"&username="+$("#username").val()+"&password="+$("#password").val(),
			success:function(data){
				//alert("Hi");
				window.location.href="userdetails.php";
			}
		});
		
	});
		
	</script>
  </body>
</html>