		$( document ).ready(function() {
		
			var host = $("head").data("host");
			console.log(host);
			console.log(host + '/comment/show');
			$("#comnt-form").validate({

					rules: {
						comment: "required",
						
					},
					messages: {
						comment: "Comment field cannot be empty",
					},
					
					submitHandler: function(form) {
						form.submit();
					}
				});
		
		
			var req = $.ajax({
				type: 'GET',
				url: host + '/comment/show',
				data: null ,
				dataType: 'json',
			});
			req.done(function(data){
				console.log("success");
				console.log(data[0]);

				loadComment(data);

			});
			req.fail(function(jqXHR, textStatus){
				alert( "Request failed: " + textStatus );
			});


			$(document).delegate('#submit-but', 'click',function(e){
					
					e.preventDefault();
					var form_elm = $('#cmnt-form');
					console.log(form_elm);
					var formData = 'parent_id=' + $('#parent_id').attr('value') + '&message=' + $('#message').val();
					console.log(formData);
					console.log($('#message'));
					var req = $.ajax({
						type: 'POST',
						url:  host + '/comment/add',
						cache: false,
						data:  {parent_id: $('#parent_id').attr('value'), message: $('#message').val() },
						dataType: "json",
						success: function(data){
									
									//alert("success post");
									//console.log(data);
									addComment(data['parent_id'], data['id'], data['message'] , data);
									$('.reply-form').remove();
								},
						error: function(jqXHR, textStatus, e){
								
								alert( "Request failed: " + textStatus + e);
								alert(jqXHR.status );
								$('.reply-form').remove();
							},

					});
					
					return false;
					
				});

			$(document).delegate('#submit-but-main', 'click',function(e){
					
					e.preventDefault();
					var form_elm = $('#cmnt-form-main');
					
					var formData = 'parent_id=' + $('#parent_id_main').attr('value') + '&message=' + $('#message-main').val();
					console.log(formData);
					
					var req = $.ajax({
						type: 'POST',
						url:  host + '/comment/add',
						cache: false,
						data:  {parent_id: $('#parent_id_main').attr('value'), message: $('#message-main').val() },
						dataType: "json",
						success: function(data){
									
									//alert("success post");
									//console.log(data);
									addComment(data['parent_id'], data['id'], data['message'],data );
									//$('#comnt-form-main').children('#message-main').val("Add new comment");
								},
						error: function(jqXHR, textStatus, e){
								
								alert( "Request failed: " + textStatus + e);
								alert(jqXHR.status );
								//$('#comnt-form-main').children('#message-main').val("Add new comment");
							},

					});
					
					return false;
					
				});

			function addComment(parent,child,message,data){
				var s = 0;var pos = '25px';
				var link = host + '/comment/add'
				if(data['created_at']){
					var date = "<div class='cmnt-date'>"+data['created_at']+"</div>"
				}else{
					d = new Date();
					dstring =" " + d.getFullYear() + "-" + (d.getMonth()+1) + "-" + d.getDay() + " " + d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
					var date = "<div class='cmnt-date'>"+dstring+"</div>"
				}
				var content = 
				"<div class='cmnt-text'>"+message+"</div>";
				if(parent !== '0'){

				var reply = 
				"<div class='comnt-extra'><div class='comnt-reply' id='"+child+"' >Reply </div></div>";

					var elm = $(content).attr({'id' : ''+child}).appendTo('#'+parent);
					elm.before(date);
					var reply_elm = elm.append(reply);
					elm.css({'position':'relative', 'margin-left': pos});

					console.log(elm.attr('id'));
				}else{

						var reply = 
				"<div class='comnt-extra'><div class='comnt-reply' id='"+child+"' >Reply </div></div>";
					var elm = $(content).attr({'id' : ''+child}).appendTo('.cmnt-main');
					elm.before(date);
					var reply_elm = elm.append(reply);
					elm.css({'position':'relative', 'margin-left': pos});


				}
			}

			function loadComment(data){	
				for(var i=0; i < data.length; i++){
					addComment(data[i]['parent_id'], data[i]['id'], data[i]['message'], data[i]);
				}
			}

				$(document).delegate(".comnt-reply","click",function(){
					var elm_reply = $(this).next('.reply-form'); 
					if(elm_reply.length === 0){
						var form = 
						"<div class='reply-form'><form action='dbins.php' method='post' id='comnt-form' novalidate='novalidate' ><textarea type='text' name='message' id='message' class='message-box' placeholder='Add comments here' ></textarea><input type='hidden' value="+$(this).attr('id')+" name='parent_id' id='parent_id' > <input type='submit' value='comment' id='submit-but' class='submit-but-wrap' ></form></div>";
						$(this).after(form);
					}else{
						elm_reply.remove();
					}
				});
			

		});