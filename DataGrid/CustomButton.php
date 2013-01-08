<?php
namespace Neutron\DataGridBundle\DataGrid;

class CustomButton
{
    protected $name;
    
    protected $title;
    
    protected $caption;
    
    protected $buttonIcon = '';
    
    protected $position = 'last';
    
    protected $uri;
    
    public function __construct($name, array $options = array())
    {
        $this->setName($name);
        
        $methods = get_class_methods(get_class($this));
        
        foreach ($options as $key => $value){
            $method = 'set' . ucfirst($key);
            if (in_array($method, $methods)){
                $this->$method($value);
            } else {
                throw new InvalidArgumentException(sprintf('Method "%s" does not exist'));
            }
        }
    }
    
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }
    
    public function getTitle()
    {
        return $this->title;
    }
    
    public function setCaption($caption)
    {
        $this->caption = $caption;
        return $this;
    }
    
    public function getCaption()
    {
        return $this->caption;
    }
    
    public function setButtonIcon($buttonIcon)
    {
        $this->buttonIcon = $buttonIcon;
    }
    
    public function getButtonIcon()
    {
        return $this->buttonIcon;
    }
    
    public function setPosition($position)
    {
        $this->position = $position;
        return $this;
    }
    
    public function getPosition()
    {
        return $this->position;
    }
    
    public function setUri($uri)
    {
        $this->uri = $uri;
        return $this;
    }
    
    public function getUri()
    {
        return $this->uri;
    }
    
    public function getOptions()
    {
        return array(
            'title' => $this->getTitle(),
            'caption' => $this->getCaption(),
            'buttonicon' => $this->getButtonIcon(),
            'position' => $this->getPosition(),
            'uri' => $this->getUri()
        );
    }
}