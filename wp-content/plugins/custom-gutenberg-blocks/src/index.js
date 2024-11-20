import './index.scss';
import {
  useBlockProps,
  InspectorControls,
  MediaUpload,
  RichText,
} from '@wordpress/block-editor';
import { PanelBody, Button } from '@wordpress/components';
import { registerBlockType } from '@wordpress/blocks';
import metadata from './block.json';

registerBlockType(metadata.name, {
  edit: EditComponent,
});

function EditComponent({ attributes, setAttributes }) {
  const { imageUrl, title, subtitle, description } = attributes;

  const onSelectImage = (image) => {
    setAttributes({ imageUrl: image.url });
  };

  return (
    <div {...useBlockProps()}>
      <InspectorControls>
        <PanelBody title="Settings">
          <p>Customize your block content here.</p>
        </PanelBody>
      </InspectorControls>

      <div className="custom-block">
        <div className="custom-block__image" style={{ flex: '1 1 50%' }}>
          <MediaUpload
            onSelect={onSelectImage}
            allowedTypes={['image']}
            render={({ open }) => (
              <Button onClick={open} variant="secondary">
                {imageUrl ? (
                  <img src={imageUrl} alt="Selected" />
                ) : (
                  'Select Image'
                )}
              </Button>
            )}
          />
        </div>

        <div className="custom-block__content" style={{ flex: '1 1 50%' }}>
          <RichText
            tagName="h2"
            placeholder="Enter title..."
            value={title}
            onChange={(newTitle) => setAttributes({ title: newTitle })}
            style={{ fontSize: '33px', fontWeight: 'bold', color: '#f18825' }}
          />
          <RichText
            tagName="h4"
            placeholder="Enter subtitle..."
            value={subtitle}
            onChange={(newSubtitle) => setAttributes({ subtitle: newSubtitle })}
            style={{ fontSize: '23px', color: '#333', marginTop: '8px' }}
          />
          <RichText
            tagName="p"
            placeholder="Enter description..."
            value={description}
            onChange={(newDescription) =>
              setAttributes({ description: newDescription })
            }
            style={{ fontSize: '16px', color: '#333', marginTop: '8px' }}
          />
        </div>
      </div>
    </div>
  );
}
