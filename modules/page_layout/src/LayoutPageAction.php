<?php
namespace Drupal\page_layout;


class LayoutPageAction {
  var $label;
  var $url;
  var $options;

  function __construct($label, $url, $options = array()) {
    $this->label = $label;
    $this->url = $url;
    $this->options = $options;
  }

  function toArray() {
    return array(
      'label' => $this->label,
      'url' => is_object($this->url) ? $this->url->toString() : $this->url,
      'options' => $this->options
    );
  }

}
