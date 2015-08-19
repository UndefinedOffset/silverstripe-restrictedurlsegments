<?php
class RestrictedURLSegments extends DataExtension {
    /**
     * Segments that are restricted
     * @var {array}
     * @config RestrictedURLSegments.restricted
     */
    private static $restricted=array(
                                    'dev',
                                    'admin'
                                );
    
    /**
     * Updates the CMS fields adding the fields defined in this extension
     * @return {bool} Returns boolean false if the segment appears in the restricted segments
     */
    public function augmentValidURLSegment() {
        $restrictedSegments=Config::inst()->get('RestrictedURLSegments', 'restricted');
        return !in_array($this->owner->URLSegment, $restrictedSegments);
    }
}
?>