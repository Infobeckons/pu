<h1>Members List</h1>
<table>
<thead>
										<tr>
											<th>Register ID</th>
											<th>Name</th>
                                            <th>Father Name</th>
											
										</tr>
									</thead>


@foreach($users as $value)
								<tbody>
                                <tr>
                                    <td>{{ $value->Id }}</td>
                                    <td>{{ $value->name }}</td>
                                    <td>{{ $value->fname }}</td>
                                    
                                    
                                </tr>
                            @endforeach
                            </tbody>
                                
                            </table>