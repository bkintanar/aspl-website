<table id="sample-table-1" class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th class="center">
				<label>
					<input type="checkbox">
					<span class="lbl"></span>
				</label>
			</th>
			<th>Code</th>
			<th>Name</th>
			<th class="hidden-480">Status</th>

			<th>Action</th>
		</tr>
	</thead>

	<tbody>
		@foreach($data_table as $data)
		<tr>
			<td class="center">
				<label>
					<input type="checkbox">
					<span class="lbl"></span>
				</label>
			</td>

			<td>
				<a href="#">{{$data->abbr}}</a>
			</td>
			<td>{{$data->name}}</td>
			<td class="hidden-480">
				@if($data->active == 1)
				<span class="label label-success" id="status_{{$data->id}}">active</span>
				@else
				<span class="label label-warning" id="status_{{$data->id}}">inactive</span>
				@endif
			</td>

			<td>
				<div class="hidden-phone visible-desktop btn-group" id="{{$data->id}}">
					<button class="btn btn-mini btn-info" rel="edit">
						<i class="icon-edit bigger-120"></i>
					</button>
					@if($data->active == 1)
					<button class="btn btn-mini btn-danger" rel="deactivate">
						<i class="icon-trash bigger-120"></i>
					</button>
					@else
					<button class="btn btn-mini btn-success" rel="activate">
						<i class="icon-ok bigger-120"></i>
					</button>
					@endif
				</div>

				<div class="hidden-desktop visible-phone">
					<div class="inline position-relative">
						<button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown">
							<i class="icon-cog icon-only bigger-110"></i>
						</button>

						<ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
							<li>
								<a href="#" class="tooltip-info" data-rel="tooltip" title="" data-original-title="View">
									<span class="blue">
										<i class="icon-zoom-in bigger-120"></i>
									</span>
								</a>
							</li>

							<li>
								<a href="#" class="tooltip-success" data-rel="tooltip" title="" data-original-title="Edit">
									<span class="green">
										<i class="icon-edit bigger-120"></i>
									</span>
								</a>
							</li>

							<li>
								<a href="#" class="tooltip-error" data-rel="tooltip" title="" data-original-title="Delete">
									<span class="red">
										<i class="icon-trash bigger-120"></i>
									</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>