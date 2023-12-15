
<style>
.sidebar .active{
	font-weight:900;
}
</style>
<nav id="sidebar">
	<div class="sidebar-header">
		<h3> <a href=""><img src="{{ asset('assets/images/arka-logo.svg') }}" alt=""></a></h3>
		<strong><img src="{{ asset('assets/images/favicon1.svg')}}" alt=""></strong>
	</div>

	<div id="vertical-menu">
		<ul class="list-unstyled components">
			<li>
				<a href="dashboard" class="btn"><img src="{{ asset('assets/images/dashboard.svg')}}">
				<span class="menu-b">Dashboard</span>
			</a>
			</li>
			<li>
				<h3><a href="javascipt:void(0)"><img src="{{asset('assets/images/management.svg')}}">
				
				<span class="menu-b">Leads Management</span>   <span class="plus">+</span></a> </h3>
				<ul class="collapse list-unstyled" style="">
					<li><a href="lead-manager/" class="active">All</a></li>
					<li><a href="lead-manager/?mode=dashboard">Dashboard</a></li>
				</ul>
			</li><!---close Leads---->

			<li>
				<h3><a href="javascipt:void(0)"><img src="{{ asset('assets/images/customer-contract.svg')}}"> 
				<span class="menu-b">Customer Contract</span> <span class="plus">+ </span></a></h3>
				<ul class="collapse list-unstyled" style="">
					<li><a href="all-commercial-view/">All</a></li>
					
						<li><a href="contract-customer/">Payment View</a></li>
					
					<li><a href="contract-customer/?mode=dashboard">Dashboard </a></li>
				</ul>
			</li><!---->

			<li>
				<h3><a href="javascipt:void(0)"><img src="{{ asset('assets/images/work.svg')}}"> 
				<span class="menu-b">Projects</span> <span class="plus">+ </span></a></h3>
				<ul class="collapse list-unstyled" style="">
					<li><a href="projects/">All</a></li>
					<li><a href="panel-team-view">In Team View</a></li>
					<li><a href="electrical-team-view">En Team View</a></li>
					<li><a href="projects/?mode=dashboard">Dashboard</a></li>
				</ul>
			</li>
			<!---->
			
			<li>
				<h3><a href="javascipt:void(0)"> <img src="{{ asset('assets/images/commercial.svg')}}" alt=""> 
				<span class="menu-b">Commercial</span> <span class="plus">+ </span></a></h3>
				<ul class="collapse list-unstyled" >
					
					<li><a href="customer-price-manager/?val=1">Price List</a></li>
					
					<!-- <li><a href="#">Payment Terms</a></li>
					<li><a href="#">Margin</a></li>
					<li><a href="#">T&C</a></li> -->
				</ul>
			</li>
			<!---     --->
			
			<li>
				<h3><a href="javascipt:void(0)"><img src="{{ asset('assets/images/analysis.svg')}}"> <span class="menu-b">Analytics</span> <span class="plus">+ </span></a></h3>
				<ul class="collapse list-unstyled">
					<li><a href="#">Leads</a></li>
					<li><a href="#">Projects</a></li>
					<li><a href="#">Sales</a></li>
					<li><a href="#">Revenue</a></li>
				</ul>
			</li>
			
			<li>
				<h3><a href="javascipt:void(0)"><img src="{{ asset('assets/images/add.svg')}}" alt=""> <span class="menu-b">Administration</span> <span class="plus">+ </span></a> </h3>
				<ul class="collapse list-unstyled" style="">
				
				<li><a href="access-manager">Role Manager</a></li>
				<li><a href="user-manager">User Manager</a></li>
				<li><a href="praposal-tnc">Terms & Conditions</a></li>
				<li><a href="{{ url('master-product-list/panel/1') }} ">Master Product List</a></li>
				<li><a href="#">Finance</a></li>
				<li><a href="#">HR</a></li>
				<li><a href="#">Knowledge Base</a></li>
				</ul>
			</li>
			<!-------->
		</ul>
	</div>
</nav>