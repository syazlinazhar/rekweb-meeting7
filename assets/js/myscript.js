const flashData = $('.flash-data').data('flashdata');

if( flashData ) {
    Swal.fire({
        title: 'Data successfully ', 
        text: 'Added ' + flashData,
        type: 'success'
    });
}

// button delete
$('.button-delete').on('click', function (e) {

    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
            title: 'Are you sure?',
            text: "data will be deleted!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Delete Data!'
          }).then((result) => {
            if (result.value) {
              document.location.href = href;
    
            }
        })
}); 