<!DOCTYPE html>
<html ng-app="testApp">
<head>
	<meta charset="UTF-8">
	<title>Test</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.9/angular-route.min.js"></script>
	<script src="js/app.js"></script>

	<style>
		p.help-block {
			color: #d70000;
		}
	</style>

	<base href="/">
</head>
<body ng-controller="mainCtrl">

	<header>
		<nav class="navbar navbar-inverse">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand" href="/">Test</a>
				</div>
			</div>
		</nav>
	</header>

	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<form ng-submit="create(content)" novalidate>
					<div class="form-group">
						<label control-label for="first_name">First Name*</label>
						<input type="text" name="first_name" value="" class="form-control" ng-model="content.first_name">
						<p class="help-block" ng-if="errors.first_name[0]">{{ errors.first_name[0] }}</p>
					</div>

					<div class="form-group">
						<label control-label for="last_name">Last Name*</label>
						<input type="text" name="last_name" value="" class="form-control" ng-model="content.last_name">
						<p class="help-block" ng-if="errors.last_name[0]">{{ errors.last_name[0] }}</p>
					</div>

					<div class="form-group">
						<label control-label for="email">Email Address*</label>
						<input type="text" name="email" value="" class="form-control" ng-model="content.email">
						<p class="help-block" ng-if="errors.email[0]">{{ errors.email[0] }}</p>
					</div>

					<div class="form-group">
						<label control-label for="mobile_no">Mobile No.*</label>
						<div class="input-group">
							<div class="input-group-addon">+65</div>
							<input type="number" name="mobile_no" value="" class="form-control" ng-model="content.mobile_no">
						</div>

						<p class="help-block" ng-if="errors.mobile_no[0]">{{ errors.mobile_no[0] }}</p>
					</div>

					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
			<div class="col-lg-8">
				<h3>List</h3>
				<ul ng-repeat="item in list">
					<li>User #{{item.id}}</li>
						<ul>
							<li>{{item.first_name}}</li>
							<li>{{item.last_name}}</li>
							<li>{{item.email}}</li>
							<li>+65 {{item.mobile_no}}</li>
						</ul>
				</ul>
			</div>
		</div>
	</div>

</body>
</html>