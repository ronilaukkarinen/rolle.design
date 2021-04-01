export default function getLocalization(stringKey) {
  if (typeof window.rolle_screenReaderText === 'undefined' || typeof window.rolle_screenReaderText[stringKey] === 'undefined') {
    // eslint-disable-next-line no-console
    console.error(`Missing translation for ${stringKey}`);
    return '';
  }
  return window.rolle_screenReaderText[stringKey];
}
