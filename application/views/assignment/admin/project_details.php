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
  .btn_of_change_st{
	color: #fff;
    background: red;
    border: none;
    padding: 5px 4px;
    display: flex;
    margin-top: 1px;
    margin-bottom: 1px;
    margin-left: 0px;
    justify-content: stretch;
    border-radius: 0px 4px 4px 0;
  }
  .change_status_form{
	 display: flex;

  }
</style> 

<div class="container-fluid">
<?php if ($this->session->flashdata('pro_success')): ?>
    <div class="alert alert-success">
        <?php 
		echo $this->session->flashdata('pro_success'); 
		 $this->session->unset_userdata('pro_success');
		?>
		
    </div>
<?php endif; ?>

<?php if ($this->session->flashdata('pro_error')): ?>
    <div class="alert alert-danger">
        <?php echo $this->session->flashdata('pro_error'); ?>
    </div>
<?php endif; ?>
  <div class="row">
    <div class="col-sm-8">
    <h4 class="text-left heading mt-3 mb-3">All User Project Details</h4>
    </div>
    <div class="col-sm-4">
       <div>
       <form id="SearchAssignment" method="post" class="mt-1">
				<input type="search" name="keypress" class="form-control" placeholder="search by batch,name,email,course and etc." id="searchInput">
			</form>
        </div>
    </div>
    <div class="col-sm-12">
	<div id="full-div-search" style="display: none;max-height:550px;overflow-y:scroll;">
	<table class="table table-bordered">
			<thead>
			<tr>
				<th class="text-left">id</th>
				<th class="text-left">Name</th>
				<th  class="text-left">Email</th>
				<th class="text-left">Title</th>
				<th class="text-left">Course</th>
				<th class="text-left">Batch</th>
				<th class="text-left">Project</th>
				<th class="text-left">Date</th>
				<th class="text-right">Action</th>
      </tr>
			</thead>
    <tbody class="searchData" id="search-menu"> 
		</tbody>
	</table>
	</div>
	</div>
  </div>
       <!-- <div class="row" style="max-height:680px;overflow:auto;"> -->
       <div class="row">
          <div class="col-sm-12">
		  <table class="table table-bordered">
			<thead>
			<tr>
			<th class="text-left">id</th>
			<th class="text-left">User Name</th>
			<th class="text-left">Email</th>
			<th class="text-left">Title</th>
			<th class="text-left">Course</th>
			<th class="text-left">Batch</th>
			<th class="text-left">Project</th>
			<th class="text-left">Date</th>
             <th class="text-center">
				Action
            </th>
          </tr>
			</thead>
          <tbody> 
		  <?php 
		    if(!empty($pr_result)){
			   $number=1;
			  foreach($pr_result as $result){
				?>
					
			<tr>
				<td class="text-left" style="width:3%"><?=$number?></td>
				<td class="text-left" style="width:10%"><?=$result['name']?></td>	
				<td class="text-left" style="width:15%"><?=$result['email']?></td>	
				<td class="text-left" style="width:10%"><?=$result['title']?></td>
				<td class="text-left" style="width:20%"><?=$result['course']?></td>
				<td class="text-left" style="width:10%"><?=$result['batch']?></td>
				<td class="text-left" style="width:5%"> <a href="<?=$result['mini_project']?>">Project</a></td>
				<td class="text-left" style="width:10%"><?=$result['created_at']?></td>
				<td class="text-center buttoncol pt-2 pr-2">
                <button class="btn btn-danger btn-sm deletebtnvc" type="submit" name="remove_levels" value="delete" title="Delete Project" data-project-id="<?=$result['id']?>" data-toggle="modal" data-target=".deleteModol" >
                    <i class="fa fa-trash" aria-hidden="true"></i>
                </button>
            </td>
					
			</tr>

			<div class="modal fade deleteModol" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-sm">
					<div class="modal-content modal-gradient">
						<div class="modal-body">
						Are you sure?
						<input type="hidden" name="blog_id" id="blog_id">
						<input type="hidden" name="baseurl" id="baseurl" value="<?=base_url();?>">
						</div>
						<div class="modal-footer">
						<a id="deleteurl" href="<?php echo base_url().'AssignmentAllUserAdmin/Delete_Single_Project_dtc/'.$result['id']?>" class="btn btn-danger"> Delete </a>
						<a type="button" data-dismiss="modal" class="btn"> Cancel</a>
						</div>
					</div>
				</div>
				</div>
			<?php
      $number++;		
				}
			  }
			  else{
				echo "<tr><td colspan='9'><h3 class='text-center data-not-found-assign'>No Data Is Available.</h3></td></tr>";
			}
			?>
        </tbody>
        </table>
         </div>
       </div>
       <!-- Pagination Links -->
       <div>
            <?= $pagination_links; ?>
        </div>
</div>


<div class="modal fade searchdeleteModol" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content modal-gradient">
          <div class="modal-body">
          Are you sure?
          <input type="hidden" name="dproject_id" id="dproject_id">
          <input type="hidden" name="dbaseurl" id="dproject_baseurl" value="<?=base_url();?>">
          </div>
          <div class="modal-footer">
          <a id="searchdeleteurl" href="#" class="btn btn-danger"> Delete </a>
          <a type="button" data-dismiss="modal" class="btn"> Cancel</a>
          </div>
        </div>
      </div>
</div>

<?php $this->load->view("assignment/admin/common/adminfooter.php") ;?>
<script type="text/javascript">
  $(document).ready(function(){
    $('.deletebtnvc').on('click', function(e){ 
      var courseId = $(this).data('project-id'); 
      var delete_url=document.getElementById('deleteurl');
      var baseurl=document.getElementById('baseurl').value;
      delete_url.href=baseurl+'AssignmentAllUserAdmin/Delete_Single_Project_dtc/'+courseId;
      
    });
  });  

</script>
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
            url: '<?= base_url('AssignmentAllUserAdmin/project_search_function') ?>',
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
            var numbersr=1;
            $.each(data, function (index, item) {
                var elem = ` 
			<tr>
				<td class="text-left" style="width:8%">${numbersr}</td>
				<td class="text-left" style="width:8%">${item.name}</td>
				<td class="text-left" style="width:8%">${item.email}</td>
        <td class="text-left" style="width:17%">${item.title}</td>
				<td class="text-left" style="width:28%">${item.course}</td>	
        <td class="text-left" style="width:10%">${item.batch}</td>
				<td class="text-left" style="width:2%"><a href="${item.mini_project}"><img src="https://www.theiotacademy.co/assets/assignment/images/qnsicon.png" width="30"></a></td>
				<td class="text-left" style="width:12%">${item.created_at}</td>
				<td class="text-center px-0 pt-3" style="width:15%">
           <button class="btn btn-danger btn-sm delete-search-project" type="submit" name="remove_levels" value="delete" title="Delete Project" data-psearch-id="${item.id}" data-toggle="modal" data-target=".searchdeleteModol" >
                    <i class="fa fa-trash" aria-hidden="true"></i>
                </button>
				</td>
			</tr>`;
        $searchMenu.append(elem);
        numbersr++;
        
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


 
  $(document).ready(function () {
    // Use event delegation for dynamically generated elements
    $(document).on("click", ".delete-search-project", function (e) { 
        e.preventDefault(); // Prevent default behavior if needed

        var projectId = $(this).data("psearch-id"); 
        var delete_url = document.getElementById('searchdeleteurl');
        var baseurl = document.getElementById('dproject_baseurl').value;
        delete_url.href = baseurl + 'AssignmentAllUserAdmin/Delete_Single_Project_dtc/' + projectId;
    });
});

 </script>


<?php } 
else{ 
	redirect(base_url()."assignment-login") ;
	}?>
