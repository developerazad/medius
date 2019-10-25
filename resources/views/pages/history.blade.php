@extends('layouts.app')
@section('content')
	<div class="container-fluid app-body">
		<h3>Buffer Posting

{{--			@if($user->plansubs())--}}
{{--				@if($user->plansubs()['plan']->slug == 'proplusagencym' OR $user->plansubs()['plan']->slug == 'proplusagencyy' )--}}
{{--					<a href="https://bufferapp.com/oauth2/authorize?client_id={{env('BUFFER_CLIENT_ID')}}&redirect_uri={{env('BUFFER_REDIRECT')}}&response_type=code" class="btn btn-primary pull-right">Add Buffer Account</a>--}}
{{--				@endif--}}
{{--			@endif--}}




		</h3>

		<div class="row">
			<div class="col-md-12">
				<table class="table table-hover social-accounts" id="example">
					<thead>
						<tr>
							<th>Group Name</th>
							<th>Group Type</th>
							<th>Account Name</th>
							<th>Post Text</th>
							<th>Time</th>
						</tr>
					</thead>
					<tbody>
					@foreach ($bufferPosts as $bufferPost)

							<tr>
								<td width="350">{{ $bufferPost->name }}</td>
								<td width="350">{{ $bufferPost->postType }}</td>
								<td width="350">
									<img src="{{ $bufferPost->avatar }}" alt="" style="width: 70px;height:70px;border-radius: 50%;">
								</td>
								<td width="350">{{ $bufferPost->text }}</td>
								<td width="350">{{ date('d M, Y H:i:s', strtotime($bufferPost->sent_at)) }}</td>
							</tr>
					@endforeach
					</tbody>
				</table>
				<span class="pull-right">{{ $bufferPosts->links() }}</span>
			</div>
		</div>
	</div>
@endsection

