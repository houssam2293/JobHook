@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table">
                        				<thead>
                        					<tr>
                        						<th>candidatId</th>
                        						<th>accountId</th>
                        						<th>nom</th>
                                    <th>prenom</th>
                                    <th>email</th>
                        					</tr>
                        				</thead>
                        				<tbody>
                        					<tr>
                                    @foreach($candidats as $candidat)
                        						<td>{{ $candidat->candidatId }}</td>
                        						<td>{{ $candidat->accountId }}</td>
                        						<td>{{ $candidat->nom }}</td>
                                    <td>{{ $candidat->prenom }}</td>
                                    <td>{{ $candidat->email }}</td>
                        					</tr>
                                  @endforeach
                        				</tbody>
                        			</table>
