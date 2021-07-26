$(function(){
    readData();
    function readData(){
        $('.table-data').html('');
        $.ajax({
            type : 'GET',
            url : 'function/getData.php',
            dataType : 'json',
            success : function(result){
                let no = 1;
                $.each(result, function(i,data){
                    $('.table-data').append(`
                        <tr>
                            <td>`+ no++ +`</td>
                            <td>`+ data['nama'] +`</td>
                            <td>`+ data['nrp'] +`</td>
                            <td>`+ data['email'] +`</td>
                            <td>`+ data['jurusan'] +`</td>
                            <td>
                                <button class="button-edit" data-id='`+data['id']+`'>Edit</button>
                                <button class="button-delete" data-id='`+data['id']+`'>Hapus</button>
                            </td>
                        </tr>
                    `)
                })
            }
        })
    }

    $('.button-tambah').on('click',function(){
        tambahData()
    })

    function tambahData(){
            var nama = $('.input-nama').val();
            var nrp = $('.input-nrp').val();
            var email = $('.input-email').val();
            var jurusan = $('.input-jurusan').val();
            
            $.ajax({
                type : 'POST',
                url : 'function/tambahData.php',
                dataType : 'JSON',
                data : {
                    'nama' : nama,
                    'nrp' : nrp,
                    'email' : email,
                    'jurusan' : jurusan
                },
                success : function(data){
                    if(data['status'] === 1){
                        alert(data['message']);
                        readData();
                        resetForm()
                    }else{
                        alert(data['message']);
                        readData()
                        resetForm()
                    }
                }
            })
            
    }

    $('.table-data').on('click','.button-edit', function(){
        // console.log('ok'+)
        getData($(this).data('id'))
    })

    function getData(id){
        $.ajax({
            type : 'POST',
            url : 'function/getDataId.php',
            dataType : 'JSON',
            data : {
                'id' : id
            },
            success : function(data){
                $('.input-id').val(data.id)
                $('.input-nama').val(data.nama)
                $('.input-nrp').val(data.nrp)
                $('.input-email').val(data.email)
                $('.input-jurusan').val(data.jurusan)

                $('.button-tambah').hide()
                $('.button-simpan').show()
                $('.button-batal').show()

            }
        })
    }

    $('.button-batal').on('click',function(){
        resetForm()
        finish()
    })

    $('.button-simpan').on('click',function(){
        editData()
    })

    function editData(){
        var id = $('.input-id').val();
        var nama = $('.input-nama').val();
        var nrp = $('.input-nrp').val();
        var email = $('.input-email').val();
        var jurusan = $('.input-jurusan').val();

        $.ajax({
            type : 'POST',
            url : 'function/editData.php',
            dataType : 'JSON',
            data : {
                'id' : id,
                'nama' : nama,
                'nrp' : nrp,
                'email' : email,
                'jurusan' : jurusan
            },
            success : function(data){
                if(data['status'] === 1){
                    alert(data['message']);
                    readData();
                    resetForm()
                    finish()
                }else{
                    alert(data['message']);
                    readData()
                    resetForm()
                    finish()
                }
            }
        })
    }

    function finish(){
        $('.button-tambah').show()
        $('.button-simpan').hide()
        $('.button-batal').hide()
    }

    $('.table-data').on('click','.button-delete', function(){
        deleteData($(this).data('id'))
        // console.log($(this).data('id'))
    })
    
    function deleteData(id){
        $.ajax({
            type : 'POST',
            url : 'function/deleteData.php',
            dataType : 'JSON',
            data : {
                'id' : id
            },
            success : function(data){
                if(data['status'] === 1){
                    alert(data['message']);
                    readData()
                }else{
                    alert(data['message']);
                    readData()
                }
            }
        })
    }

    function resetForm(){
        $('.input-nama').val('');
        $('.input-nrp').val('');
        $('.input-email').val('');
        $('.input-jurusan').val('');
    }

})