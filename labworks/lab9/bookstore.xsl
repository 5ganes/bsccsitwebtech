<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
	
	<xsl:template match="/">
		<div>
			<h2>Book List</h2>
			<table border="2">
				<tr>
					<td>Title</td>
					<td>Price</td>
				</tr>
				<xsl:for-each select="bookstore/book">
					<tr>
						<td><xsl:value-of select="title"/></td>
						<td><xsl:value-of select="price"/></td>
					</tr>
				</xsl:for-each>
			</table>
		</div>
	</xsl:template>

</xsl:stylesheet>