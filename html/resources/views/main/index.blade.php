@include('header.index')
    
<div class="container">
    <div class="row" style="margin-top: 60px">
        <h5>Masukkan Link Yang anda Ingin Shortlink</h5>
        <div class="input-field col s10" style="padding-left: 0px">
            <input id="link" type="text" class="link">                
        </div>
        <div class="input-field col s2">
            <button class="btn waves-effect waves-light" name="bt_shorten" id="bt_shorten" onclick="btClick()">Shorten
            </button>
        </div>
    </div>       
</div>
    
    <script>
    $(document).ready(function(){      
        $('#link').change(function(){
            let link =  $('#link').val();        
            if( link == '' || !link.includes('localhost:8000')){
                $('#bt_shorten').text('Shorten');
            }else{
                $('#bt_shorten').text('Copy');
            }            
        });        
    }); 
    function btClick(){      
        let btn_shorten = $('#bt_shorten').text();          
        if( btn_shorten == 'Copy'){
            let link =  $('#link').val();   
            navigator.clipboard.writeText(link); 
        }else{
            let link =  $('#link').val();   
            $.ajax({     
                type: "POST",
                url: '/api/post-link',
                data: {
                    "link": link,
                },
                success: function (data) {
                    $('#link').val('localhost:8000/'+ data);
                    $('#bt_shorten').text('Copy');
                },       
            });       
        }
    }
    </script>
