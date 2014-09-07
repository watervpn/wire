<?php include("inc/header.inc"); ?> 

<?php include("inc/nav_user.inc"); ?>

<div class="row">
	
	<ul class="tabs" data-tab>
		<li class="tab-title active"><a href="#panel2-1">Canada(5)</a></li>
		<li class="tab-title"><a href="#panel2-4">America(10)</a></li>
		<li class="tab-title"><a href="#panel2-2">Hong Kong (3)</a></li>
		<li class="tab-title"><a href="#panel2-3">Europe</a></li>
		<li class="tab-title"><a href="#panel2-4">Africa</a></li>
		<li class="tab-title"><a href="#panel2-4">Middle East</a></li>
	</ul>
	<div class="tabs-content">
		<div class="content active" id="panel2-1">			
			<table>
				<thead>
					<tr>
						<th width="200">Table Header</th>
						<th>Table Header</th>
						<th width="150">Table Header</th>
						<th width="150">Table Header</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Kelowna</td>
						<td>This is longer content Donec id elit non mi porta gravida at eget
							metus.</td>
						<td>Content Goes Here</td>
						<td>Content Goes Here</td>
					</tr>
					<tr>
						<td>Vancouver</td>
						<td>This is longer Content Goes Here Donec id elit non mi porta
							gravida at eget metus.</td>
						<td>Content Goes Here</td>
						<td>Content Goes Here</td>
					</tr>
					<tr>
						<td>Ontario</td>
						<td>This is longer Content Goes Here Donec id elit non mi porta
							gravida at eget metus.</td>
						<td>Content Goes Here</td>
						<td>Content Goes Here</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="content" id="panel2-2">
			<p>Second panel content goes here...</p>
		</div>
		<div class="content" id="panel2-3">
			<p>Third panel content goes here...</p>
		</div>
		<div class="content" id="panel2-4">
			<p>Fourth panel content goes here...</p>
		</div>
	</div>


</div>


<?php include("inc/footer.inc"); ?>