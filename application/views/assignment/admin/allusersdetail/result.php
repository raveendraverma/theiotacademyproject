<?php 
if($this->session->userdata("user")){
?>
<link rel="stylesheet" href="<?php echo asset_url()?>admin/css/site.css">
<?php $this->load->view("assignment/admin/common/adminheader.php") ;?>
<style type="text/css">

  .submitbtn{
    width:150px; 
    border-radius:25px; 
    font-weight:bold; 
  }

  .modal-gradient{
    background: rgb(95,52,235);
    background: linear-gradient(90deg, rgba(95,52,235,1) 16%, rgba(181,39,241,1) 42%, rgba(215,37,90,1) 92%);
     color: white;
  }

  .pagination .active{
    color: #ff3115!important;
  }

  .pagination a{
    color:#3e206d; 
    padding:10px;
    margin: 2px;
    font-weight: bolder;
    text-decoration: none;

  }
  .pagination a:hover{
    text-decoration: underline;
  }
  .data-not-found-assign{
	margin-top: 15px;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .form-control:focus {
    outline: none !important;
    box-shadow: none !important;
    border-color: inherit !important;
}
.all_assign_topdv{
  max-height: 700px;
  overflow: auto;
}
</style> 

<div class="container-fluid">
<?php if ($this->session->flashdata('message')) {?>
    <div class="alert alert-success">
        <?php echo $this->session->flashdata('message'); ?>
    </div>
<?php }?>
<?php if ($this->session->flashdata('assign_success')): ?>
    <div class="alert alert-success">
        <?php 
		echo $this->session->flashdata('assign_success'); 
		 $this->session->unset_userdata('assign_success');
		?>
		
    </div>
<?php endif; ?>

<?php if ($this->session->flashdata('assign_error')): ?>
    <div class="alert alert-danger">
        <?php echo $this->session->flashdata('assign_error'); ?>
    </div>
<?php endif; ?>
<div class="row">
  <div class="col-sm-8">
	<h4 class="text-left heading mt-1 mb-3">All Users Detail List</h4>
  </div>
  <div class="col-sm-4">
      <form id="SearchAssignment" method="post" class="mt-1">
				<input type="search" name="keypress" class="form-control" placeholder="search by batch,name,email,course and etc." id="searchInput">
			</form>
  </div>
	<div class="col-sm-12">
	<div id="full-div-search" style="display: none;max-height:550px;overflow-y:scroll;">
	<table class="table table-bordered">
			<thead>
			<tr>
				<th class="text-left">Name</th>
				<th  class="text-left">Email</th>
				<th class="text-left">Mobile No.</th>
				<th class="text-left">Course</th>
				<th class="text-left">Assignment File</th>
				<th class="text-left">Assignment Topic</th>
				<th class="text-left">Batch</th>
				<th class="text-left">Marks</th>
				<th class="text-right">Action</th>
      </tr>
			</thead>
    <tbody class="searchData" id="search-menu"> 
		</tbody>
	</table>
	</div>
	</div>
</div>
 <div class="accordion all_assign_topdv" id="accordionExample">
  <?php 
   if (count($result)>0){
		$count=1;
  foreach($result as $row){ ?>
  <div class="card">
    <div class="card-header cardstyle" id="headingOne">
      <h2 class="mb-0">
        <table border="0" class="tablestyle">
          <tbody> 
          <tr>
            <td class="idcol"><?php echo $count ?></td>
            <td><?=$row['username']?> <span style="color:red"> | </span> <?=$row['email']?><span style="color:red"> | </span> <?=$row['mobile']?></td>
            <td colspan="3" class="text-right edatecol">last date: <?=date('d-m-Y',strtotime($row['created_at']))?></td>
          </tr>
          <tr>
             <td colspan="3"></td>
            <td class="text-right buttoncol pt-2 pr-2">
                <button class="btn btn-primary btn-sm collapsed" type="button" data-toggle="collapse" data-target="#collapseOne<?=$row['id']?>" aria-expanded="false" aria-controls="collapseOne" title="More Info"><i class="fas fa-info-circle"></i></button>
            </td>
            <!-- <td class="text-right buttoncol pt-2">
				<a href="<?=base_url().'UploadNewsUpdate/editnewseventdata/'.$row['id']?>" class="btn btn-warning btn-sm text-center" title="Update NewsEvents"><i class="fas fa-edit"></i></a>
            </td> -->
          </tr>
        </tbody>
        </table>
      </h2>
    </div>
    <div id="collapseOne<?=$row['id']?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body cardbodystyle">
       <div class="row">
          <div class="col-sm-12">
		  <table class="tablestyle table table-bordered">
			<thead>
			<tr>
            <!-- <th class="text-left">Name</th>
            <th  class="text-left">Email</th>
            <th class="text-left">Mobile No.</th> -->
			<th class="text-left">Batch</th>
			<th class="text-left">Course</th>
			<th class="text-left">Assignment File</th>
			<th class="text-left">Assignment Topic</th>
			<th class="text-left">Marks</th>
      <th class="text-left">Feedback</th>
      <th class="text-left">Date</th>
      <th class="text-right">Action</th>
      </tr>
			</thead>
          <tbody> 
		  <?php 
		    $hasData = false;
			  foreach($allresult as $maksresult){
                 if($row['id']==$maksresult['user_id']){
					$hasData = true;	
				?>
					
			<tr>
				<!-- <td class="text-left"><?php //$maksresult['username']?></td>
				<td  class="text-left"><?php //$maksresult['email']?></td>
				<td class="text-left"><?php //$maksresult['mobile']?></td> -->
				<td class="text-left" style="width:8%"><?=$maksresult['batch']?></td>
				<td class="text-left" style="width:25%"><?=$maksresult['course']?></td>	
				<td class="text-left" style="width:2%"><a href="<?php echo $maksresult['assignment_pdf']?>"><img src="https://www.theiotacademy.co/assets/assignment/images/qnsicon.png" alt="" width="30"></a></td>
				<td class="text-left" style="width:20%"><?=$maksresult['title']?></td>
				<td class="text-left" style="width:5%"><?php if(isset($maksresult['marks'])){echo $maksresult['marks'];}else{echo "Null";}?></td>
				<td class="text-left" style="width:5%"> <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#staticBackdrop<?=$maksresult['assignpdfid']?>">feedback</button></td>
				<td class="text-left" style="width:10%"> <?= date('d-m-Y', strtotime($maksresult['created_at'])) ?></td>
				<td class="text-right" style="width:8%">
					<a href="<?=base_url().'AssignmentAllUserAdmin/editassignmentmarks/'.$maksresult['assignpdfid']?>" class="btn btn-warning btn-sm text-center" title="Update marks"><i class="fas fa-edit"></i></a>
          <button class="btn btn-danger btn-sm deletebtnvc" 
          name="remove_levels" 
          title="Delete assignment" 
          data-assign-id="<?= $maksresult['assignpdfid'] ?>" 
          data-toggle="modal" 
          data-target="#deleteModal">
    <i class="fa fa-trash" aria-hidden="true"></i>
  </button>
				</td>
			</tr>
      <div class="modal fade" id="staticBackdrop<?=$maksresult['assignpdfid']?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
       <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php 
        if(!empty($maksresult['feedback'])){
        echo $maksresult['feedback'];
        }
        else{
          echo "<h4 class='text-center'>No Record Available</h4>";
        }
        ?>
      </div>
    </div>
  </div>
</div>
			<?php		
				}
			  }
			  if (!$hasData) {
				echo "<tr><td colspan='5'><h3 class='text-center data-not-found-assign'>No data available or the user has not uploaded any assignments.</h3></td></tr>";
			}
			?>
        </tbody>
        </table>
         </div>
       </div>
      </div>
    </div>
  </div>

<?php 
$count++ ;
}?>

</div>
<br>
</div>


<?php
}
else{
?>
<div class="container">
  <h2 class="text-center">Oops! There is No Users.</h2>
</div>
<?php }?>

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content modal-gradient">
      <div class="modal-body">
        <p>Are you sure you want to delete this assignment?</p>
        <input type="hidden" id="baseurl" value="<?= base_url(); ?>">
      </div>
      <div class="modal-footer">
        <a id="deleteurl" href="#" class="btn btn-danger">Delete</a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="searchdeleteModal" tabindex="-1" role="dialog" aria-labelledby="searchdeleteModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content modal-gradient">
      <div class="modal-body">
        <p>Are you sure you want to delete this assignment?</p>
        <input type="hidden" id="searchbaseurl" value="<?= base_url(); ?>">
      </div>
      <div class="modal-footer">
        <a id="searchdeleteurl" href="#" class="btn btn-danger">Delete</a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
<?php $this->load->view("assignment/admin/common/adminfooter.php") ;?>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
<script>
$(document).ready(function () {
    $('#searchInput').on('keyup', function () {
        SearchDataForm(this);
    });

    function SearchDataForm(keyData) {
        var keyValue = $.trim(keyData.value);  // Trim input value

        if (keyValue.length === 0) {
            $('#search-menu').empty();
            $('.searchData').hide();
            $('#full-div-search').hide();
            return;  // Stop execution if input is empty
        }

        $.ajax({
            type: 'POST',
            url: '<?= base_url('AssignmentAllUserAdmin/searchfunction') ?>',
            data: { keyValue: keyValue },
            dataType: 'json',
            success: function (response) {
                populateDataSearch(response);
            },
            error: function () {
                console.error('An error occurred while fetching search results.');
            }
        });
    }

    function populateDataSearch(data) {
        var $searchMenu = $('#search-menu');
        $searchMenu.empty();

        if (data && data.length > 0) {
            $('.searchData').show();
            $('#full-div-search').show();
            $.each(data, function (index, item) {
                var elem = ` 
			<tr>
				<td class="text-left" style="width:8%">${item.username}</td>
				<td class="text-left" style="width:8%">${item.email}</td>
				<td class="text-left" style="width:8%">${item.mobile}</td>
				<td class="text-left" style="width:28%">${item.course}</td>	
				<td class="text-left" style="width:2%"><a href="${item.assignment_pdf}"><img src="https://www.theiotacademy.co/assets/assignment/images/qnsicon.png" width="30"></a></td>
				<td class="text-left" style="width:17%">${item.title}</td>
				<td class="text-left" style="width:10%">${item.batch}</td>
				<td class="text-left" style="width:12%">${item.marks}</td>
				<td class="text-center px-0 pt-3" style="width:15%">
					<a href="<?=base_url().'AssignmentAllUserAdmin/editassignmentmarks/'?>${item.assignpdfid}" class="btn btn-warning btn-sm text-center" title="Update marks"><i class="fas fa-edit"></i></a>
          <button class="btn btn-danger btn-sm searchdeletebtnvc" 
        name="remove_levels" 
        title="Delete assignment" 
        data-search-assign-id="${item.assignpdfid}" 
        data-toggle="modal" 
        data-target="#searchdeleteModal">
  <i class="fa fa-trash" aria-hidden="true"></i>
</button>
				</td>
			</tr>`;
                $searchMenu.append(elem);
            });
        } else {
					var elem_em = ` 
			<tr>
				<td style="width:99%" colspan="9"><p class="text-center">There Is No Data Found.</p></td></tr>`;
            $('.searchData').append(elem_em);
        }
    }

    $(document).on('click', function (e) {
        if (!$(e.target).closest('#search-menu, #searchInput').length) {
            $('.searchData').hide("fast");
            $('#full-div-search').hide("fast");
        }
    });
});

 </script>

<script type="text/javascript">
  $(document).ready(function () {
    $('.deletebtnvc').on('click', function () {
      var assignId = $(this).data('assign-id');
      var baseurl = $('#baseurl').val();
      $('#deleteurl').attr('href', baseurl + 'AssignmentAllUserAdmin/delete_user_assignment/' + assignId);
    });
  });

  $(document).ready(function () {
    $(document).on('click', '.searchdeletebtnvc', function () { 
        var searchassignId = $(this).data('search-assign-id');
        var searchbaseurl = $('#searchbaseurl').val();
        $('#searchdeleteurl').attr('href', searchbaseurl + 'AssignmentAllUserAdmin/delete_user_assignment/' + searchassignId);
    });
});
</script>

<?php } 
else{ 
	redirect(base_url()."assignment-login") ;
	}?>
