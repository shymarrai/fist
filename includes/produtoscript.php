<script >function mouseMoveMatrix() {
  var train = $('.imgzoom');

  train.on('mousedown', function() {
    train.css({
      'transform': 'scale(2.2)'
    })
  })

  .on('mouseup', function() {
    train.css({
      'transform': 'scale(1)'
    })
  })

  .on('mousemove', function(e) {
    $('.imgzoom').css({
      'transform-origin': ((e.pageX - $(this).offset().left) / $(this).width()) * 50 + '% ' + ((e.pageY - $(this).offset().top) / $(this).height()) * 50 + '%'
    });
  });
  $('.imgzoom').on('dragstart', function(event) {
    event.preventDefault();
  });
}

mouseMoveMatrix();

  

</script>