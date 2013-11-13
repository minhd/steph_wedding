<?php $this->load->view('header'); ?>
<div class="container" ng-app ng-controller="adminCtrl">
	<div class="row">
		<div class="col-lg-12">
			<div class="box header-box">
				<hr><h1 class="intro-text text-center">Admin</h1><hr>
				<div class="row text-center" ng-hide="granted">
					<div class="col-lg-offset-3 col-lg-6">
						<div class="input-group">
							<input type="password" class="form-control" ng-model="password">
					   		<span class="input-group-btn"> <button class="btn btn-default" type="button">Access!</button> </span>
						</div>
					</div>
				</div>

				<div class="row" ng-show="granted">
					<div ng-repeat="f in attending" class="well col-lg-12">
						<span class="label label-primary" ng-show="f.attend">Attending</span>
						<span class="label label-warning" ng-show="!f.attend">Not Attending</span><br>

						<ul>
							<li ng-repeat="p in f.guests">
								{{p.name}}
								<span class="label label-default" ng-show="p.isChild">Child</span>
							</li>
						</ul>

						<div class="alert alert-warning" ng-show="f.diet">
							{{f.diet}}
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('footer'); ?>