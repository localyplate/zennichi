<style type="text/css">
	table.dpp a:link {
		color: #666;
		font-weight: bold;
		text-decoration:none;
	}
	table.dpp a:visited {
		color: #999999;
		font-weight:bold;
		text-decoration:none;
	}
	table.dpp a:active,
	table.dpp a:hover {
		color: #bd5a35;
		text-decoration:underline;
	}
	table.dpp {
		font-family:Arial, Helvetica, sans-serif;
		color:#666;
		font-size:12px;
		text-shadow: 1px 1px 0px #fff;
		background:#eaebec;
		margin:20px;
		border:#ccc 1px solid;

		-moz-border-radius:3px;
		-webkit-border-radius:3px;
		border-radius:3px;

		-moz-box-shadow: 0 1px 2px #d1d1d1;
		-webkit-box-shadow: 0 1px 2px #d1d1d1;
		box-shadow: 0 1px 2px #d1d1d1;
	}
	table.dpp th {
		padding:21px 25px 22px 25px;
		border-top:1px solid #fafafa;
		border-bottom:1px solid #e0e0e0;

		background: #ededed;
		background: -webkit-gradient(linear, left top, left bottom, from(#ededed), to(#ebebeb));
		background: -moz-linear-gradient(top,  #ededed,  #ebebeb);
	}
	table.dpp th {
		text-align: left;
		padding-left:20px;
		color: red;
	}
	table.dpp tr:first-child th:first-child {
		-moz-border-radius-topleft:3px;
		-webkit-border-top-left-radius:3px;
		border-top-left-radius:3px;
	}
	table.dpp tr:first-child th:last-child {
		-moz-border-radius-topright:3px;
		-webkit-border-top-right-radius:3px;
		border-top-right-radius:3px;
	}
	table.dpp tr {
		text-align: center;
		padding-left:20px;
	}
	table.dpp td:first-child {
		text-align: left;
		padding-left:20px;
		border-left: 0;
	}
	table.dpp td {
		padding:18px;
		border-top: 1px solid #ffffff;
		border-bottom:1px solid #e0e0e0;
		border-left: 1px solid #e0e0e0;

		background: #fafafa;
		background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
		background: -moz-linear-gradient(top,  #fbfbfb,  #fafafa);
	}
	table.dpp tr.even td {
		background: #f6f6f6;
		background: -webkit-gradient(linear, left top, left bottom, from(#f8f8f8), to(#f6f6f6));
		background: -moz-linear-gradient(top,  #f8f8f8,  #f6f6f6);
	}
	table.dpp tr:last-child td {
		border-bottom:0;
	}
	table.dpp tr:last-child td:first-child {
		-moz-border-radius-bottomleft:3px;
		-webkit-border-bottom-left-radius:3px;
		border-bottom-left-radius:3px;
	}
	table.dpp tr:last-child td:last-child {
		-moz-border-radius-bottomright:3px;
		-webkit-border-bottom-right-radius:3px;
		border-bottom-right-radius:3px;
	}
	table.dpp tr:hover td {
		background: #f2f2f2;
		background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
		background: -moz-linear-gradient(top,  #f2f2f2,  #f0f0f0);	
	}
	.paginate {
		font-family:Arial, Helvetica, sans-serif;
		padding: 3px;
		margin: 3px;
	}

	.paginate a {
		padding:2px 5px 2px 5px;
		margin:2px;
		border:1px solid #999;
		text-decoration:none;
		color: #666;
	}
	.paginate a:hover, .paginate a:active {
		border: 1px solid #999;
		color: #000;
	}
	.paginate span.current {
		margin: 2px;
		padding: 2px 5px 2px 5px;
		border: 1px solid #999;
		
		font-weight: bold;
		background-color: #999;
		color: #FFF;
	}
	.paginate span.disabled {
		padding:2px 5px 2px 5px;
		margin:2px;
		border:1px solid #eee;
		color:#DDD;
	}
</style>
<div class="wrap" style="margin-bottom:100px;">
<div id="treecontrol" style="margin:20px 0;position:relative;">
    <span style="font-size:20pt">Type List</span></br></br>
    <span style="font-size:15pt;"><a href="/wp-admin/admin.php?page=cpt_add_type">Add New Type</a></span>
</div>
<table class="dpp">
	<tr>
		<th>ID</th>
		<th>Type Name</th>
	</tr>
	<?php
		$type_list = cpf_get_list_type();
		foreach ($type_list as $value) {
	?>
	<tr>
		<td>
			<?php echo $value["id"]; ?>
		</td>
		<td>
			<?php echo $value["type_name"]; ?>
		</td>
	</tr>
	<?php
		}
	?>
</table>

