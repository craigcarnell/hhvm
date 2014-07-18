<?hh
// generated by idl-to-hni.php

/* Represents a writer that provides a non-cached, forward-only means of
 * generating streams or files containing XML data.
 */
<<__NativeData("XMLWriterData")>>
class XMLWriter {
  function __construct() {}

  /* Create new xmlwriter using memory for string output.
   * @return bool - Returns TRUE on success or FALSE on failure.
   */
  <<__Native>>
  function openMemory(): bool;

  /* Creates a new XMLWriter using uri for the output.
   * @param string $uri - The URI of the resource for the output.
   * @return mixed - Returns TRUE on success or FALSE on
   */
  <<__Native>>
  function openURI(string $uri): bool;

  /* Sets the string which will be used to indent each element/attribute of the
   * resulting xml.
   * @param string $indentstring - The indentation string.
   * @return bool - Returns TRUE on success or FALSE on failure.
   */
  <<__Native>>
  function setIndentString(string $indentstring): bool;

  /* Toggles indentation on or off.
   * @param bool $indent - Whether indentation is enabled.
   * @return bool - Returns TRUE on success or FALSE on failure.
   */
  <<__Native>>
  function setIndent(bool $indent): bool;

  /* Starts a document.
   * @param string $version - The version number of the document as part of the
   * XML declaration. Defaults to 1.0.
   * @param string $encoding - The encoding of the document as part of the XML
   * declaration. NULL by default.
   * @param string $standalone - yes or no.
   * @return bool - Returns TRUE on success or FALSE on failure.
   */
  <<__Native>>
  function startDocument(?string $version = "1.0",
                         ?string $encoding = "",
                         ?string $standalone = ""): bool;

  /* Starts an element.
   * @param string $name - The element name.
   * @return bool - Returns TRUE on success or FALSE on failure.
   */
  <<__Native>>
  function startElement(string $name): bool;

  /* Starts a namespaced element.
   * @param mixed $prefix - The namespace prefix.
   * @param string $name - The element name.
   * @param string $uri - The namespace URI.
   * @return bool - Returns TRUE on success or FALSE on failure.
   */
  <<__Native>>
  function startElementNS(mixed $prefix,
                          string $name,
                          mixed $uri): bool;

  /* Writes a full namespaced element tag.
   * @param string $prefix - The namespace prefix.
   * @param string $name - The element name.
   * @param string $uri - The namespace URI.
   * @param string $content - The element contents.
   * @return bool - Returns TRUE on success or FALSE on failure.
   */
  <<__Native>>
  function writeElementNS(?string $prefix,
                          string $name,
                          ?string $uri,
                          ?string $content = null): bool;

  /* Writes a full element tag.
   * @param string $name - The element name.
   * @param string $content - The element contents.
   * @return bool - Returns TRUE on success or FALSE on failure.
   */
  <<__Native>>
  function writeElement(string $name,
                        ?string $content = null): bool;

  /* Ends the current element.
   * @return bool - Returns TRUE on success or FALSE on failure.
   */
  <<__Native>>
  function endElement(): bool;

  /* End the current xml element. Writes an end tag even if the element is
   * empty.
   * @return bool - Returns TRUE on success or FALSE on failure.
   */
  <<__Native>>
  function fullEndElement(): bool;

  /* Starts a namespaced attribute.
   * @param string $prefix - The namespace prefix.
   * @param string $name - The attribute name.
   * @param string $uri - The namespace URI.
   * @return bool - Returns TRUE on success or FALSE on failure.
   */
  <<__Native>>
  function startAttributeNS(string $prefix,
                            string $name,
                            string $uri): bool;

  /* Starts an attribute.
   * @param string $name - The attribute name.
   * @return bool - Returns TRUE on success or FALSE on failure.
   */
  <<__Native>>
  function startAttribute(string $name): bool;

  /* Writes a full namespaced attribute.
   * @param string $prefix - The namespace prefix.
   * @param string $name - The attribute name.
   * @param string $uri - The namespace URI.
   * @param string $content - The attribute value.
   * @return bool - Returns TRUE on success or FALSE on failure.
   */
  <<__Native>>
  function writeAttributeNS(string $prefix,
                            string $name,
                            string $uri,
                            string $content): bool;

  /* Writes a full attribute.
   * @param string $name - The name of the attribute.
   * @param string $value - The value of the attribute.
   * @return bool - Returns TRUE on success or FALSE on failure.
   */
  <<__Native>>
  function writeAttribute(string $name,
                          string $value): bool;

  /* Ends the current attribute.
   * @return bool - Returns TRUE on success or FALSE on failure.
   */
  <<__Native>>
  function endAttribute(): bool;

  /* Starts a CDATA.
   * @return bool - Returns TRUE on success or FALSE on failure.
   */
  <<__Native>>
  function startCData(): bool;

  /* Writes a full CDATA.
   * @param string $content - The contents of the CDATA.
   * @return bool - Returns TRUE on success or FALSE on failure.
   */
  <<__Native>>
  function writeCData(string $content): bool;

  /* Ends the current CDATA section.
   * @return bool - Returns TRUE on success or FALSE on failure.
   */
  <<__Native>>
  function endCData(): bool;

  /* Starts a comment.
   * @return bool - Returns TRUE on success or FALSE on failure.
   */
  <<__Native>>
  function startComment(): bool;

  /* Writes a full comment.
   * @param string $content - The contents of the comment.
   * @return bool - Returns TRUE on success or FALSE on failure.
   */
  <<__Native>>
  function writeComment(string $content): bool;

  /* Ends the current comment.
   * @return bool - Returns TRUE on success or FALSE on failure.
   */
  <<__Native>>
  function endComment(): bool;

  /* Ends the current document.
   * @return bool - Returns TRUE on success or FALSE on failure.
   */
  <<__Native>>
  function endDocument(): bool;

  /* Starts a processing instruction tag.
   * @param string $target - The target of the processing instruction.
   * @return bool - Returns TRUE on success or FALSE on failure.
   */
  <<__Native>>
  function startPI(string $target): bool;

  /* Writes a processing instruction.
   * @param string $target - The target of the processing instruction.
   * @param string $content - The content of the processing instruction.
   * @return bool - Returns TRUE on success or FALSE on failure.
   */
  <<__Native>>
  function writePI(string $target,
                   string $content): bool;

  /* Ends the current processing instruction.
   * @return bool - Returns TRUE on success or FALSE on failure.
   */
  <<__Native>>
  function endPI(): bool;

  /* Writes a text.
   * @param string $content - The contents of the text.
   * @return bool - Returns TRUE on success or FALSE on failure.
   */
  <<__Native>>
  function text(string $content): bool;

  /* Writes a raw xml text.
   * @param string $content - The text string to write.
   * @return bool - Returns TRUE on success or FALSE on failure.
   */
  <<__Native>>
  function writeRaw(string $content): bool;

  /* Starts a DTD.
   * @param string $qualifiedname - The qualified name of the document type to
   * create.
   * @param string $publicid - The external subset public identifier.
   * @param string $systemid - The external subset system identifier.
   * @return bool - Returns TRUE on success or FALSE on failure.
   */
  <<__Native>>
  function startDTD(string $qualifiedname,
                    ?string $publicid = "",
                    ?string $systemid = ""): bool;

  /* Writes a full DTD.
   * @param string $name - The DTD name.
   * @param string $publicid - The external subset public identifier.
   * @param string $systemid - The external subset system identifier.
   * @param string $subset - The content of the DTD.
   * @return bool - Returns TRUE on success or FALSE on failure.
   */
  <<__Native>>
  function writeDTD(string $name,
                    ?string $publicid = "",
                    ?string $systemid = "",
                    ?string $subset = ""): bool;

  /* Starts a DTD element.
   * @param string $qualifiedname - The qualified name of the document type to
   * create.
   * @return bool - Returns TRUE on success or FALSE on failure.
   */
  <<__Native>>
  function startDTDElement(string $qualifiedname): bool;

  /* Writes a full DTD element.
   * @param string $name - The name of the DTD element.
   * @param string $content - The content of the element.
   * @return bool - Returns TRUE on success or FALSE on failure.
   */
  <<__Native>>
  function writeDTDElement(string $name,
                           string $content): bool;

  /* Ends the current DTD element.
   * @return bool - Returns TRUE on success or FALSE on failure.
   */
  <<__Native>>
  function endDTDElement(): bool;

  /* Starts a DTD attribute list.
   * @param string $name - The attribute list name.
   * @return bool - Returns TRUE on success or FALSE on failure.
   */
  <<__Native>>
  function startDTDAttlist(string $name): bool;

  /* Writes a DTD attribute list.
   * @param string $name - The name of the DTD attribute list.
   * @param string $content - The content of the DTD attribute list.
   * @return bool - Returns TRUE on success or FALSE on failure.
   */
  <<__Native>>
  function writeDTDAttlist(string $name,
                           string $content): bool;

  /* Ends the current DTD attribute list.
   * @return bool - Returns TRUE on success or FALSE on failure.
   */
  <<__Native>>
  function endDTDAttlist(): bool;

  /* Starts a DTD entity.
   * @param string $name - The name of the entity.
   * @param bool $isparam
   * @return bool - Returns TRUE on success or FALSE on failure.
   */
  <<__Native>>
  function startDTDEntity(string $name,
                          bool $isparam): bool;

  /* Writes a full DTD entity.
   * @param string $name - The name of the entity.
   * @param string $content - The content of the entity.
   * @param bool $pe
   * @param string $publicid
   * @param string $systemid
   * @param string $ndataid
   * @return bool - Returns TRUE on success or FALSE on failure.
   */
  <<__Native>>
  function writeDTDEntity(string $name,
                          string $content,
                          bool $pe = false,
                          string $publicid = "",
                          string $systemid = "",
                          string $ndataid = ""): bool;

  /* Ends the current DTD entity.
   * @return bool - Returns TRUE on success or FALSE on failure.
   */
  <<__Native>>
  function endDTDEntity(): bool;

  /* Ends the DTD of the document.
   * @return bool - Returns TRUE on success or FALSE on failure.
   */
  <<__Native>>
  function endDTD(): bool;

  /* Flushes the current buffer.
   * @param bool $empty - Whether to empty the buffer or no. Default is TRUE.
   * @return mixed - If you opened the writer in memory, this function returns
   * the generated XML buffer, Else, if using URI, this function will write the
   * buffer and return the number of written bytes.
   */
  <<__Native>>
  function flush(?bool $empty = true): mixed;

  /* Returns the current buffer.
   * @param bool $flush - Whether to flush the output buffer or no. Default is
   * TRUE.
   * @return string - Returns the current buffer as a string.
   */
  <<__Native>>
  function outputMemory(?bool $flush = true): string;
}

/* Creates a new XMLWriter using memory for string output.
 * @return mixed - Returns a new xmlwriter resource for later use with the
 * xmlwriter functions on success, FALSE on error.
 */
function xmlwriter_open_memory(): mixed {
  $ret = new XMLWriter();
  if (! $ret->openMemory()) {
    return false;
  }
  return $ret;
}

/* Creates a new XMLWriter using uri for the output.
 * @param string $uri - The URI of the resource for the output.
 * @return mixed - Returns a new xmlwriter resource for later use with the
 * xmlwriter functions on success, FALSE on error.
 */
function xmlwriter_open_uri(string $uri): mixed {
  $ret = new XMLWriter();
  if (! $ret->openURI($uri)) {
    return false;
  }
  return $ret;
}

/* Sets the string which will be used to indent each element/attribute of the
 * resulting xml.
 * @param object $xmlwriter - The XMLWriter resource that is being modified.
 * This resource comes from a call to xmlwriter_open_uri() or
 * xmlwriter_open_memory().
 * @param string $indentstring - The indentation string.
 * @return bool - Returns TRUE on success or FALSE on failure.
 */
function xmlwriter_set_indent_string(XMLWriter $xmlwriter,
                                     $indentstring): ?bool {
  if (!isset($indentstring)) {
    return null;
  }
  return $xmlwriter->setIndentString($indentstring);
}

/* Toggles indentation on or off.
 * @param object $xmlwriter - The XMLWriter resource that is being modified.
 * This resource comes from a call to xmlwriter_open_uri() or
 * xmlwriter_open_memory().
 * @param bool $indent - Whether indentation is enabled.
 * @return bool - Returns TRUE on success or FALSE on failure.
 */
function xmlwriter_set_indent(XMLWriter $xmlwriter,
                              bool $indent): bool {
  return $xmlwriter->setIndent($indent);
}

/* Starts a document.
 * @param object $xmlwriter - The XMLWriter resource that is being modified.
 * This resource comes from a call to xmlwriter_open_uri() or
 * xmlwriter_open_memory().
 * @param string $version - The version number of the document as part of the
 * XML declaration. Defaults to 1.0.
 * @param string $encoding - The encoding of the document as part of the XML
 * declaration. NULL by default.
 * @param string $standalone - yes or no.
 * @return bool - Returns TRUE on success or FALSE on failure.
 */
function xmlwriter_start_document(XMLWriter $xmlwriter,
                                  ?string $version = "1.0",
                                  ?string $encoding = "",
                                  ?string $standalone = ""): bool {
  return $xmlwriter->startDocument($version, $encoding, $standalone);
}

/* Starts an element.
 * @param object $xmlwriter - The XMLWriter resource that is being modified.
 * This resource comes from a call to xmlwriter_open_uri() or
 * xmlwriter_open_memory().
 * @param string $name - The element name.
 * @return bool - Returns TRUE on success or FALSE on failure.
 */
function xmlwriter_start_element(XMLWriter $xmlwriter,
                                 string $name): bool {
  return $xmlwriter->startElement($name);
}

/* Starts a namespaced element.
 * @param object $xmlwriter - The XMLWriter resource that is being modified.
 * This resource comes from a call to xmlwriter_open_uri() or
 * xmlwriter_open_memory().
 * @param mixed $prefix - The namespace prefix.
 * @param string $name - The element name.
 * @param string $uri - The namespace URI.
 * @return bool - Returns TRUE on success or FALSE on failure.
 */
function xmlwriter_start_element_ns(XMLWriter $xmlwriter,
                                    mixed $prefix,
                                    string $name,
                                    string $uri): bool {
  return $xmlwriter->startElementNS($prefix, $name, $uri);
}

/* Writes a full namespaced element tag.
 * @param object $xmlwriter - The XMLWriter resource that is being modified.
 * This resource comes from a call to xmlwriter_open_uri() or
 * xmlwriter_open_memory().
 * @param string $prefix - The namespace prefix.
 * @param string $name - The element name.
 * @param string $uri - The namespace URI.
 * @param string $content - The element contents.
 * @return bool - Returns TRUE on success or FALSE on failure.
 */
function xmlwriter_write_element_ns(XMLWriter $xmlwriter,
                                    ?string $prefix,
                                    string $name,
                                    ?string $uri,
                                    ?string $content = null): bool {
  return $xmlwriter->writeElementNS($prefix, $name, $uri, $content);
}

/* Writes a full element tag.
 * @param object $xmlwriter - The XMLWriter resource that is being modified.
 * This resource comes from a call to xmlwriter_open_uri() or
 * xmlwriter_open_memory().
 * @param string $name - The element name.
 * @param string $content - The element contents.
 * @return bool - Returns TRUE on success or FALSE on failure.
 */
function xmlwriter_write_element(XMLWriter $xmlwriter,
                                 string $name,
                                 ?string $content = null): bool {
  return $xmlwriter->writeElement($name, $content);
}

/* Ends the current element.
 * @param object $xmlwriter - The XMLWriter resource that is being modified.
 * This resource comes from a call to xmlwriter_open_uri() or
 * xmlwriter_open_memory().
 * @return bool - Returns TRUE on success or FALSE on failure.
 */
function xmlwriter_end_element(XMLWriter $xmlwriter): bool {
  return $xmlwriter->endElement();
}

/* End the current xml element. Writes an end tag even if the element is
 * empty.
 * @param object $xmlwriter - The XMLWriter resource that is being modified.
 * This resource comes from a call to xmlwriter_open_uri() or
 * xmlwriter_open_memory().
 * @return bool - Returns TRUE on success or FALSE on failure.
 */
function xmlwriter_full_end_element(XMLWriter $xmlwriter): bool {
  return $xmlwriter->fullEndElement();
}

/* Starts a namespaced attribute.
 * @param object $xmlwriter - The XMLWriter resource that is being modified.
 * This resource comes from a call to xmlwriter_open_uri() or
 * xmlwriter_open_memory().
 * @param string $prefix - The namespace prefix.
 * @param string $name - The attribute name.
 * @param string $uri - The namespace URI.
 * @return bool - Returns TRUE on success or FALSE on failure.
 */
function xmlwriter_start_attribute_ns(XMLWriter $xmlwriter,
                                      string $prefix,
                                      string $name,
                                      string $uri): bool {
  return $xmlwriter->startAttributeNS($prefix, $name, $uri);
}

/* Starts an attribute.
 * @param object $xmlwriter - The XMLWriter resource that is being modified.
 * This resource comes from a call to xmlwriter_open_uri() or
 * xmlwriter_open_memory().
 * @param string $name - The attribute name.
 * @return bool - Returns TRUE on success or FALSE on failure.
 */
function xmlwriter_start_attribute(XMLWriter $xmlwriter,
                                   string $name): bool {
  return $xmlwriter->startAttribute($name);
}

/* Writes a full namespaced attribute.
 * @param object $xmlwriter - The XMLWriter resource that is being modified.
 * This resource comes from a call to xmlwriter_open_uri() or
 * xmlwriter_open_memory().
 * @param string $prefix - The namespace prefix.
 * @param string $name - The attribute name.
 * @param string $uri - The namespace URI.
 * @param string $content - The attribute value.
 * @return bool - Returns TRUE on success or FALSE on failure.
 */
function xmlwriter_write_attribute_ns(XMLWriter $xmlwriter,
                                      string $prefix,
                                      string $name,
                                      string $uri,
                                      string $content): bool {
  return $xmlwriter->writeAttributeNS($prefix, $name, $uri, $content);
}

/* Writes a full attribute.
 * @param object $xmlwriter - The XMLWriter resource that is being modified.
 * This resource comes from a call to xmlwriter_open_uri() or
 * xmlwriter_open_memory().
 * @param string $name - The name of the attribute.
 * @param string $value - The value of the attribute.
 * @return bool - Returns TRUE on success or FALSE on failure.
 */
function xmlwriter_write_attribute(XMLWriter $xmlwriter,
                                   string $name,
                                   string $value): bool {
  return $xmlwriter->writeAttribute($name, $value);
}

/* Ends the current attribute.
 * @param object $xmlwriter - The XMLWriter resource that is being modified.
 * This resource comes from a call to xmlwriter_open_uri() or
 * xmlwriter_open_memory().
 * @return bool - Returns TRUE on success or FALSE on failure.
 */
function xmlwriter_end_attribute(XMLWriter $xmlwriter): bool {
  return $xmlwriter->endAttribute();
}

/* Starts a CDATA.
 * @param object $xmlwriter - The XMLWriter resource that is being modified.
 * This resource comes from a call to xmlwriter_open_uri() or
 * xmlwriter_open_memory().
 * @return bool - Returns TRUE on success or FALSE on failure.
 */
function xmlwriter_start_cdata(XMLWriter $xmlwriter): bool {
  return $xmlwriter->startCData();
}

/* Writes a full CDATA.
 * @param object $xmlwriter - The XMLWriter resource that is being modified.
 * This resource comes from a call to xmlwriter_open_uri() or
 * xmlwriter_open_memory().
 * @param string $content - The contents of the CDATA.
 * @return bool - Returns TRUE on success or FALSE on failure.
 */
function xmlwriter_write_cdata(XMLWriter $xmlwriter,
                               string $content): bool {
  return $xmlwriter->writeCData($content);
}

/* Ends the current CDATA section.
 * @param object $xmlwriter - The XMLWriter resource that is being modified.
 * This resource comes from a call to xmlwriter_open_uri() or
 * xmlwriter_open_memory().
 * @return bool - Returns TRUE on success or FALSE on failure.
 */
function xmlwriter_end_cdata(XMLWriter $xmlwriter): bool {
  return $xmlwriter->endCData();
}

/* Starts a comment.
 * @param object $xmlwriter - The XMLWriter resource that is being modified.
 * This resource comes from a call to xmlwriter_open_uri() or
 * xmlwriter_open_memory().
 * @return bool - Returns TRUE on success or FALSE on failure.
 */
function xmlwriter_start_comment(XMLWriter $xmlwriter): bool {
  return $xmlwriter->startComment();
}

/* Writes a full comment.
 * @param object $xmlwriter - The XMLWriter resource that is being modified.
 * This resource comes from a call to xmlwriter_open_uri() or
 * xmlwriter_open_memory().
 * @param string $content - The contents of the comment.
 * @return bool - Returns TRUE on success or FALSE on failure.
 */
function xmlwriter_write_comment(XMLWriter $xmlwriter,
                                 string $content): bool {
  return $xmlwriter->writeComment($content);
}

/* Ends the current comment.
 * @param object $xmlwriter - The XMLWriter resource that is being modified.
 * This resource comes from a call to xmlwriter_open_uri() or
 * xmlwriter_open_memory().
 * @return bool - Returns TRUE on success or FALSE on failure.
 */
function xmlwriter_end_comment(XMLWriter $xmlwriter): bool {
  return $xmlwriter->endComment();
}

/* Ends the current document.
 * @param object $xmlwriter - The XMLWriter resource that is being modified.
 * This resource comes from a call to xmlwriter_open_uri() or
 * xmlwriter_open_memory().
 * @return bool - Returns TRUE on success or FALSE on failure.
 */
function xmlwriter_end_document(XMLWriter $xmlwriter): bool {
  return $xmlwriter->endDocument();
}

/* Starts a processing instruction tag.
 * @param object $xmlwriter - The XMLWriter resource that is being modified.
 * This resource comes from a call to xmlwriter_open_uri() or
 * xmlwriter_open_memory().
 * @param string $target - The target of the processing instruction.
 * @return bool - Returns TRUE on success or FALSE on failure.
 */
function xmlwriter_start_pi(XMLWriter $xmlwriter,
                            string $target): bool {
  return $xmlwriter->startPI($target);
}

/* Writes a processing instruction.
 * @param object $xmlwriter - The XMLWriter resource that is being modified.
 * This resource comes from a call to xmlwriter_open_uri() or
 * xmlwriter_open_memory().
 * @param string $target - The target of the processing instruction.
 * @param string $content - The content of the processing instruction.
 * @return bool - Returns TRUE on success or FALSE on failure.
 */
function xmlwriter_write_pi(XMLWriter $xmlwriter,
                            string $target,
                            string $content): bool {
  return $xmlwriter->writePI($target, $content);
}

/* Ends the current processing instruction.
 * @param object $xmlwriter - The XMLWriter resource that is being modified.
 * This resource comes from a call to xmlwriter_open_uri() or
 * xmlwriter_open_memory().
 * @return bool - Returns TRUE on success or FALSE on failure.
 */
function xmlwriter_end_pi(XMLWriter $xmlwriter): bool {
  return $xmlwriter->endPI();
}

/* Writes a text.
 * @param object $xmlwriter - The XMLWriter resource that is being modified.
 * This resource comes from a call to xmlwriter_open_uri() or
 * xmlwriter_open_memory().
 * @param string $content - The contents of the text.
 * @return bool - Returns TRUE on success or FALSE on failure.
 */
function xmlwriter_text(XMLWriter $xmlwriter,
                        string $content): bool {
  return $xmlwriter->text($content);
}

/* Writes a raw xml text.
 * @param object $xmlwriter - The XMLWriter resource that is being modified.
 * This resource comes from a call to xmlwriter_open_uri() or
 * xmlwriter_open_memory().
 * @param string $content - The text string to write.
 * @return bool - Returns TRUE on success or FALSE on failure.
 */
function xmlwriter_write_raw(XMLWriter $xmlwriter,
                             string $content): bool {
  return $xmlwriter->writeRaw($content);
}

/* Starts a DTD.
 * @param object $xmlwriter - The XMLWriter resource that is being modified.
 * This resource comes from a call to xmlwriter_open_uri() or
 * xmlwriter_open_memory().
 * @param string $qualifiedname - The qualified name of the document type to
 * create.
 * @param string $publicid - The external subset public identifier.
 * @param string $systemid - The external subset system identifier.
 * @return bool - Returns TRUE on success or FALSE on failure.
 */
function xmlwriter_start_dtd(XMLWriter $xmlwriter,
                             string $qualifiedname,
                             ?string $publicid = "",
                             ?string $systemid = ""): bool {
  return $xmlwriter->startDTD($qualifiedname, $publicid, $systemid);
}

/* Writes a full DTD.
 * @param object $xmlwriter - The XMLWriter resource that is being modified.
 * This resource comes from a call to xmlwriter_open_uri() or
 * xmlwriter_open_memory().
 * @param string $name - The DTD name.
 * @param string $publicid - The external subset public identifier.
 * @param string $systemid - The external subset system identifier.
 * @param string $subset - The content of the DTD.
 * @return bool - Returns TRUE on success or FALSE on failure.
 */
function xmlwriter_write_dtd(XMLWriter $xmlwriter,
                             string $name,
                             ?string $publicid = "",
                             ?string $systemid = "",
                             ?string $subset = ""): bool {
  return $xmlwriter->writeDTD($name, $publicid, $systemid, $subset);
}

/* Starts a DTD element.
 * @param object $xmlwriter - The XMLWriter resource that is being modified.
 * This resource comes from a call to xmlwriter_open_uri() or
 * xmlwriter_open_memory().
 * @param string $qualifiedname - The qualified name of the document type to
 * create.
 * @return bool - Returns TRUE on success or FALSE on failure.
 */
function xmlwriter_start_dtd_element(XMLWriter $xmlwriter,
                                     string $qualifiedname): bool {
  return $xmlwriter->startDTDElement($qualifiedname);
}

/* Writes a full DTD element.
 * @param object $xmlwriter - The XMLWriter resource that is being modified.
 * This resource comes from a call to xmlwriter_open_uri() or
 * xmlwriter_open_memory().
 * @param string $name - The name of the DTD element.
 * @param string $content - The content of the element.
 * @return bool - Returns TRUE on success or FALSE on failure.
 */
function xmlwriter_write_dtd_element(XMLWriter $xmlwriter,
                                     string $name,
                                     string $content): bool {
  return $xmlwriter->writeDTDElement($name, $content);
}

/* Ends the current DTD element.
 * @param object $xmlwriter - The XMLWriter resource that is being modified.
 * This resource comes from a call to xmlwriter_open_uri() or
 * xmlwriter_open_memory().
 * @return bool - Returns TRUE on success or FALSE on failure.
 */
function xmlwriter_end_dtd_element(XMLWriter $xmlwriter): bool {
  return $xmlwriter->endDTDElement();
}

/* Starts a DTD attribute list.
 * @param object $xmlwriter - The XMLWriter resource that is being modified.
 * This resource comes from a call to xmlwriter_open_uri() or
 * xmlwriter_open_memory().
 * @param string $name - The attribute list name.
 * @return bool - Returns TRUE on success or FALSE on failure.
 */
function xmlwriter_start_dtd_attlist(XMLWriter $xmlwriter,
                                     string $name): bool {
  return $xmlwriter->startDTDAttlist($name);
}

/* Writes a DTD attribute list.
 * @param object $xmlwriter - The XMLWriter resource that is being modified.
 * This resource comes from a call to xmlwriter_open_uri() or
 * xmlwriter_open_memory().
 * @param string $name - The name of the DTD attribute list.
 * @param string $content - The content of the DTD attribute list.
 * @return bool - Returns TRUE on success or FALSE on failure.
 */
function xmlwriter_write_dtd_attlist(XMLWriter $xmlwriter,
                                     string $name,
                                     string $content): bool {
  return $xmlwriter->writeDTDAttlist($name, $content);
}

/* Ends the current DTD attribute list.
 * @param object $xmlwriter - The XMLWriter resource that is being modified.
 * This resource comes from a call to xmlwriter_open_uri() or
 * xmlwriter_open_memory().
 * @return bool - Returns TRUE on success or FALSE on failure.
 */
function xmlwriter_end_dtd_attlist(XMLWriter $xmlwriter): bool {
  return $xmlwriter->endDTDAttlist();
}

/* Starts a DTD entity.
 * @param object $xmlwriter - The XMLWriter resource that is being modified.
 * This resource comes from a call to xmlwriter_open_uri() or
 * xmlwriter_open_memory().
 * @param string $name - The name of the entity.
 * @param bool $isparam
 * @return bool - Returns TRUE on success or FALSE on failure.
 */
function xmlwriter_start_dtd_entity(XMLWriter $xmlwriter,
                                    string $name,
                                    bool $isparam): bool {
  return $xmlwriter->startDTDEntity($name, $isparam);
}

/* Writes a full DTD entity.
 * @param object $xmlwriter - The XMLWriter resource that is being modified.
 * This resource comes from a call to xmlwriter_open_uri() or
 * xmlwriter_open_memory().
 * @param string $name - The name of the entity.
 * @param string $content - The content of the entity.
 * @param bool $pe
 * @param string $publicid
 * @param string $systemid
 * @param string $ndataid
 * @return bool - Returns TRUE on success or FALSE on failure.
 */
function xmlwriter_write_dtd_entity(XMLWriter $xmlwriter,
                                    string $name,
                                    string $content,
                                    bool $pe = false,
                                    string $publicid = "",
                                    string $systemid = "",
                                    string $ndataid = ""): bool {
  return $xmlwriter->writeDTDEntity($name, $content, $pe, $publicid,
                                    $systemid, $ndataid);
}

/* Ends the current DTD entity.
 * @param object $xmlwriter - The XMLWriter resource that is being modified.
 * This resource comes from a call to xmlwriter_open_uri() or
 * xmlwriter_open_memory().
 * @return bool - Returns TRUE on success or FALSE on failure.
 */
function xmlwriter_end_dtd_entity(XMLWriter $xmlwriter): bool {
  return $xmlwriter->endDTDEntity();
}

/* Ends the DTD of the document.
 * @param object $xmlwriter - The XMLWriter resource that is being modified.
 * This resource comes from a call to xmlwriter_open_uri() or
 * xmlwriter_open_memory().
 * @return bool - Returns TRUE on success or FALSE on failure.
 */
function xmlwriter_end_dtd(XMLWriter $xmlwriter): bool {
  return $xmlwriter->endDTD();
}

/* Flushes the current buffer.
 * @param object $xmlwriter - The XMLWriter resource that is being modified.
 * This resource comes from a call to xmlwriter_open_uri() or
 * xmlwriter_open_memory().
 * @param bool $empty - Whether to empty the buffer or no. Default is TRUE.
 * @return mixed - If you opened the writer in memory, this function returns
 * the generated XML buffer, Else, if using URI, this function will write the
 * buffer and return the number of written bytes.
 */
function xmlwriter_flush(XMLWriter $xmlwriter,
                         ?bool $empty = true): mixed {
  return $xmlwriter->flush($empty);
}

/* Returns the current buffer.
 * @param object $xmlwriter - The XMLWriter resource that is being modified.
 * This resource comes from a call to xmlwriter_open_uri() or
 * xmlwriter_open_memory().
 * @param bool $flush - Whether to flush the output buffer or no. Default is
 * TRUE.
 * @return string - Returns the current buffer as a string.
 */
function xmlwriter_output_memory(XMLWriter $xmlwriter,
                                 ?bool $flush = true): string {
  return $xmlwriter->outputMemory($flush);
}
