<!DOCTYPE html>
	<html>
	<head>
		<title>RSA</title>
		<?php
			include"../function/head_properties.php";
		?>

	</head>
	<body>
		<div class="container" style="padding-top:10%" id="formContainer">
	        <div class="col-lg-4 col-md-4 col-md-offset-4 col-lg-offset-4 well">
	          <form method="post" action="/">
	            <div class="form-group">
	            	<p style="text-align: center;"><strong>RSA Algorithm</strong></p>
	              	<input type="text" class="form-control" placeholder="Plaintext" required autofocus>
	            </div>

	            <div class="form-group text-center">
	                <button type="submit" name="button" class="btn btn-primary btn-block">Generate</button> 
	                <button type="submit" name="button" class="btn btn-success btn-block">Convert</button> 	                

	            </div>

	            <div class="form-group">
	              <input type="text" class="form-control" placeholder="Encryption Text" required/>
	            </div>
	            <div class="form-group">
	              <input type="text" class="form-control" placeholder="Decryption Text" required/>
	            </div>
	          </form>
	      	</div>
	    </div>

	    <script>

	    	//basic function
	    	//penjumlahan
	    	function bi_add(a,b){
	    		return a+b;
	    	}
	    	function bi_substract(a,b){
	    		return a-b;
	    	}
	    	function bi_multiply(a,b){
	    		return a*b;
	    	}
	    	function bi_divide(a,b){
	    		return a/b;
	    	}
	    	function bi_mod(a,b){
	    		return a%b;
	    	}

	    	//prime generate function
	    	function isPrime(n) {
				if (isNaN(n) || !isFinite(n) || n%1 || n<2) 
					return false; 
				if (n%2==0) 
					return (n==2);
				if (n%3==0) 
					return (n==3);
				
				var m=Math.sqrt(n);
				for (var i=5;i<=m;i+=6) {
					if (n%i==0)     
						return false;
					if (n%(i+2)==0) 
						return false;
				}
				return true;
	    	}


	    	//function GCD
	    	function GCD(m, n){
	    		var r;
	    		if(m%n ==0)
	    			return n;
	    		return GCD(n, m%n);
	    	}

	    	//function modular invers
	    	function modInv(a,b){
	    		var b0 = b; 
	    		var x0 = 0;
	    		var x1 = 1;

	    		if(b==1)
	    			return 1;
	    		
	    		while(a>1){
	    			if(b==1)
	    				return 1;
	    			var q = a/b;
	    			var amb = a%b;
	    			a=b;
	    			b=amb;
	    			var xqx = x1 - q*x0;
	    			x1 = x0;
	    			x0 = xqx;
	    		}
	    		
	    		if(x1<0)
	    			x1 +=b0;
	    		return x1;
	    	}

	    	//fungsi egcd untuk mencari nilai invers modulo
	    	function egcd(a,b){
	    		if(a==0)
	    			return [b, 0, 1];
	    		else{
	    			var array = egcd(bi_mod(b,a),a);
	    			var g = array[0];
		    		var x = array[1];
		    		var y = array[2];

		    		return [g, bi_substract(x, bi_multiply(Math.floor(bi_divide(b,a)), y)), y];
	    		}
	    	}

	    	function modInv2(a, m){
	    		var array = egcd(a,m);
	    		var g = array[0];
	    		var x = array[1];
	    		var y = array[2];


	    		if(x<0)
	    			return bi_mod(bi_add(x,m), m);
	    		else
	    			return bi_mod(x,m); 

	    	}

	    	//generate p & q;
	    	
	 		while(true){
	 			p = Math.floor((Math.random() * 100) + 1);
	 			if(isPrime(p)){
	 				console.log("p: "+p);
	 				break;
	 			}
	 		}
	 		while(true){
	 			q = Math.floor((Math.random() * 100) + 1);
	 			if(isPrime(q)){
	 				console.log("q: "+q);
	 				break;
	 			}
	 		}

	 		if(p!=q){
	 			n 	= p*q;
	 			phi	= (p-1)*(q-1);

	 			while(true){
	 				e = Math.floor((Math.random() * 100) + 1);
	 				if(isPrime(q)){
	 					if(e<phi && GCD(e,phi)==1){
	 						break;
	 					}
	 				}
	 			}
	 			console.log("n: "+n);
	 			console.log("phi: "+phi);
	 			console.log("e: "+e);
	 			console.log(modInv2(3,7));
	 		}
	    </script>
	</body>
	</html>