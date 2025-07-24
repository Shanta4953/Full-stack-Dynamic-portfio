# Profile Pictures Directory

## Instructions for adding your profile picture:

1. **Place your profile picture in this folder** with one of these names:
   - `profile-picture.jpg` (recommended)
   - `profile-picture.png`
   - `profile-picture.webp`

2. **Recommended specifications:**
   - **Size**: 400x400 pixels (square format)
   - **Format**: JPG, PNG, or WebP
   - **Quality**: High resolution for crisp display
   - **File size**: Under 500KB for fast loading

3. **Professional photo tips:**
   - Use good lighting (natural light works best)
   - Professional attire appropriate for your industry
   - Clear, well-lit photo showing your face clearly
   - Neutral background to avoid distractions
   - High resolution and sharp image quality

4. **Current setup:**
   - The website is configured to use `profile-picture.jpg`
   - Laravel's asset helper ensures proper URL generation
   - The image will have professional styling with gradient border
   - Responsive design will make it look great on all devices

## File naming options:

If your image has a different name, either:
- **Option A**: Rename your file to `profile-picture.jpg`
- **Option B**: Update the code in `welcome.blade.php` to match your filename

## Need help?
If you need to change the image reference in the code, the current line is:
```php
<img src="{{ asset('images/profile-picture.jpg') }}" alt="Sohana Sultana Shanta - Full Stack Developer" />
```

Simply replace `profile-picture.jpg` with your actual filename.
