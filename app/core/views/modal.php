<!-- Add Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form id="add_form" method="post">
				<div class="modal-header">						
					<h4 class="modal-title">Entretien</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<input type="hidden" id="ido" name="ido" class="form-control">
				<input type="hidden" id="idc" name="idc" class="form-control">
				<div class="modal-body">					
					<div class="form-group">
						<label>Date</label>
						<input type="date" id="date" name="date" class="form-control">
					</div>
					<div class="form-group">
						<label>Time</label>
						<input type="time" id="time" name="time" class="form-control">
					</div>
				</div>
				<div class="modal-footer">
					<!-- <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel"> -->
					<button type="button" class="btn btn-default" data-dismiss="modal" value="Cancel"><i class="fa fa-close"></i> Cancel</button>
					<button type="button" name="btn-add" class="btn btn-success" id="btn-add"><i class="fa fa-plus"></i> Add</button>
				</div>
			</form>
		</div>
	</div>
</div>
