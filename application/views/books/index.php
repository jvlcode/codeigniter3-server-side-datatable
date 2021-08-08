<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Book Display</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
  		<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
		<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
		<script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
    </head>
    <body>
		<div class="container">
			<div class="row">
				<div class="col">
					<h1>Book List</h1>
					<table id="book-table" class="table table-bordered table-striped table-hover">
						<thead>
							<tr>
								<td>Book Title</td>
								<td>Book Price</td>
								<td>Book Author</td>
								<td>Rating</td>
								<td>Publisher</td>
							</tr>
						</thead>
						<tbody>
						</tbody>
					</table>
				</div>
			</div>
		</div>
    </body>
</html>
<script>
	$(document).ready(function(){
		$('#book-table').DataTable({
			"pageLength":5,
			"ajax":{
				url:"<?=site_url('books/books_data')?>",
				type:"GET"
			},
			"processing":true,
			"serverSide":true
		});

	});
</script>
