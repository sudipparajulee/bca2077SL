<html>
    <head>
        <title>Sorting</title>
    </head>
    <body>
        
        <script>
            var mynum = [2,5,9,15,254,2,1,55,10,55];
            mynum.sort(function(a,b){
                return a-b;
            })
            alert(mynum[0]);
            alert(mynum[9]);
        </script>

        <script>
            var mynum = [2,5,9,15,254,2,1,55,10,55];
            var smallest = mynum[0];
            var largest = mynum[0];
            for(var i=0; i<mynum.length; i++)
            {
                if(mynum[i]<smallest)
                {
                    smallest = mynum[i];
                }
                if(mynum[i]>largest)
                {
                    largest = mynum[i];
                }
            }

            alert(smallest);
            alert(largest);
        </script>

    </body>
</html>